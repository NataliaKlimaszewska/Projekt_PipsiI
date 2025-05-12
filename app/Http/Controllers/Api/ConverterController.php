<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ConverterController extends Controller
{
    // Conversion factors (base unit: grams)
    private $massUnits = [
        'g' => 1,           // grams
        'kg' => 1000,       // kilograms
        'mg' => 0.001,      // milligrams
        'lb' => 453.592,    // pounds
        'oz' => 28.3495,    // ounces
    ];

    // Conversion factors for volume to weight (for common baking ingredients)
    private $volumeToWeightConversions = [
        // These are approximate and can vary by ingredient
        'flour' => [
            'cup' => 120,   // 1 cup of all-purpose flour ≈ 120g
            'tablespoon' => 7.8,  // 1 tablespoon of flour ≈ 7.8g
            'teaspoon' => 2.6,    // 1 teaspoon of flour ≈ 2.6g
        ],
        'sugar' => [
            'cup' => 200,   // 1 cup of granulated sugar ≈ 200g
            'tablespoon' => 12.5, // 1 tablespoon of sugar ≈ 12.5g
            'teaspoon' => 4.2,    // 1 teaspoon of sugar ≈ 4.2g
        ],
        'butter' => [
            'cup' => 227,   // 1 cup of butter ≈ 227g
            'tablespoon' => 14.2, // 1 tablespoon of butter ≈ 14.2g
            'teaspoon' => 4.7,    // 1 teaspoon of butter ≈ 4.7g
        ],
        'milk' => [
            'cup' => 240,   // 1 cup of milk ≈ 240g
            'tablespoon' => 15,   // 1 tablespoon of milk ≈ 15g
            'teaspoon' => 5,      // 1 teaspoon of milk ≈ 5g
        ],
        'water' => [
            'cup' => 236.6, // 1 cup of water ≈ 236.6g
            'tablespoon' => 14.8, // 1 tablespoon of water ≈ 14.8g
            'teaspoon' => 4.9,    // 1 teaspoon of water ≈ 4.9g
        ]
    ];

    /**
     * Convert mass between different units
     */
    public function convertMass(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'value' => 'required|numeric',
            'from_unit' => 'required|in:g,kg,mg,lb,oz',
            'to_unit' => 'required|in:g,kg,mg,lb,oz'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => 'Validation failed',
                'details' => $validator->errors()
            ], 400);
        }

        $data = $validator->validated();

        // Convert to grams first
        $grams = $data['value'] * $this->massUnits[$data['from_unit']];

        // Convert from grams to target unit
        $result = $grams / $this->massUnits[$data['to_unit']];

        return response()->json([
            'original_value' => $data['value'],
            'original_unit' => $data['from_unit'],
            'converted_value' => round($result, 4),
            'converted_unit' => $data['to_unit']
        ]);
    }

    /**
     * Convert volume to weight for specific ingredients
     */
    public function volumeToWeight(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'ingredient' => 'required|in:flour,sugar,butter,milk,water',
            'volume' => 'required|numeric',
            'volume_unit' => 'required|in:cup,tablespoon,teaspoon',
            'target_unit' => 'required|in:g,kg,mg,lb,oz'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => 'Validation failed',
                'details' => $validator->errors()
            ], 400);
        }

        $data = $validator->validated();

        // Get weight in grams
        $grams = $data['volume'] * $this->volumeToWeightConversions[$data['ingredient']][$data['volume_unit']];

        // Convert to target unit
        $result = $grams / $this->massUnits[$data['target_unit']];

        return response()->json([
            'ingredient' => $data['ingredient'],
            'original_volume' => $data['volume'],
            'original_volume_unit' => $data['volume_unit'],
            'converted_value' => round($result, 4),
            'converted_unit' => $data['target_unit']
        ]);
    }

    /**
     * Get all available conversion options
     */
    public function conversionOptions()
    {
        return response()->json([
            'mass_units' => array_keys($this->massUnits),
            'volume_ingredients' => array_keys($this->volumeToWeightConversions),
            'volume_units' => ['cup', 'tablespoon', 'teaspoon']
        ]);
    }
}
