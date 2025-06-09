<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ConverterController extends Controller
{

    private $massUnits = [
        'g' => 1,
        'kg' => 1000,
        'mg' => 0.001,
        'lb' => 453.592,
        'oz' => 28.3495,
    ];


    private $volumeToWeightConversions = [

        'flour' => [
            'cup' => 120,
            'tablespoon' => 7.8,
            'teaspoon' => 2.6,
        ],
        'sugar' => [
            'cup' => 200,
            'tablespoon' => 12.5,
            'teaspoon' => 4.2,
        ],
        'butter' => [
            'cup' => 227,
            'tablespoon' => 14.2,
            'teaspoon' => 4.7,
        ],
        'milk' => [
            'cup' => 240,
            'tablespoon' => 15,
            'teaspoon' => 5,
        ],
        'water' => [
            'cup' => 236.6,
            'tablespoon' => 14.8,
            'teaspoon' => 4.9,
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


        $grams = $data['value'] * $this->massUnits[$data['from_unit']];


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
