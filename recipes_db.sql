-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Maj 31, 2025 at 11:36 PM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recipes_db`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kategorie`
--
CREATE TABLE produkty2 (
                          id INT AUTO_INCREMENT PRIMARY KEY,
                          nazwa VARCHAR(255) NOT NULL,
                          id_przepisu INT NOT NULL,
                          ilosc VARCHAR(50),
                          jednostka VARCHAR(50),
                          FOREIGN KEY (id_przepisu) REFERENCES przepisy(id) ON DELETE CASCADE
);

INSERT INTO produkty2 (nazwa, id_przepisu, ilosc, jednostka) VALUES
                                                                 ('Whisk flour', 3, '1', 'cup'),
                                                                 ('Baking powder', 3, '1', 'teaspoon'),
                                                                 ('Salt', 3, '1/4', 'teaspoon'),
                                                                 ('Eggs', 3, '4', 'pieces'),
                                                                 ('Sugar', 3, '1', 'cup'),
                                                                 ('Vanilla extract', 3, '1', 'teaspoon'),
                                                                 ('Fresh fruits', 3, 'approx. 1-2', 'cups'),
                                                                 ('Jell-O (gelatin dessert)', 3, '1', 'packet'),
                                                                 ('Boiling water', 3, '1', 'cup'),
                                                                 ('Cold water', 3, '1', 'cup');



CREATE TABLE `kategorie` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategorie`
--

INSERT INTO `kategorie` (`id`, `nazwa`) VALUES
(1, 'Fruits'),
(2, 'Vegetables'),
(3, 'Grains'),
(4, 'Protein'),
(5, 'Dairy'),
(6, 'Fats & Oils'),
(7, 'Sweeteners'),
(8, 'Leavening agents'),
(9, 'Add-ins'),
(10, 'Other');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `produkty`
--

CREATE TABLE `produkty` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(100) NOT NULL,
  `id_kategorii` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produkty`
--

INSERT INTO `produkty` (`id`, `nazwa`, `id_kategorii`) VALUES
(1, 'Apple', 1),
(2, 'Carrot', 2),
(3, 'Rice', 3),
(4, 'Egg', 4),
(5, 'Milk', 5),
(6, 'Butter', 6),
(7, 'Flour', 3),
(8, 'Baking Powder', 8),
(9, 'Butter', 5),
(10, 'Sugar', 7),
(11, 'Vanilla Sugar', 7),
(12, 'Yolk', 5),
(13, 'Sour Cream', 4),
(14, 'Breadcrumbs', 3),
(15, 'Mascarpone Cheese', 5),
(16, 'Icing Sugar', 7),
(17, 'Double Cream', 5),
(18, 'Espresso', 10),
(19, 'Amaretto', 10),
(20, 'Lady Finger', 10),
(21, 'cocoa', 10),
(22, 'Spelt Flour', 3),
(23, 'Yeasts', 8),
(24, 'Oat Milk', 10),
(25, 'Brown Sugar', 7),
(26, 'Salt', 10),
(27, 'Peach', 1),
(28, 'Blueberry', 1),
(29, 'Potato Flour', 10),
(30, 'Strawberry', 1),
(31, 'Jelly', 10),
(32, 'Plain Chocolate', 10),
(33, 'Semi-fat cheese', 5),
(34, 'Quark', 5),
(35, 'Lemon', 1),
(36, 'Carrot', 2),
(37, 'Courgette', 2),
(38, 'Red Kidney Bean', 2),
(39, 'Date Fruit', 1),
(40, 'Pumpkin', 2),
(41, 'Spinach', 2),
(42, 'Pomegranate', 1),
(43, 'Almond Milk', 10),
(44, 'Rye Milk', 10),
(45, 'Sweet Potato', 2),
(46, 'Beetroot', 2),
(47, 'Plum', 1),
(48, 'Orange', 1),
(49, 'Mint', 9),
(50, 'Redcurrant', 1),
(51, 'Blackcurrant', 1),
(52, 'Raspberry', 1),
(53, 'Nutella', 10),
(54, 'Raisin', 9),
(55, 'Almond', 9),
(56, 'Coconut Milk', 10),
(57, 'Coconut Shreds', 9),
(58, 'White Chocolate', 9),
(59, 'Milk Chocolate', 9),
(60, 'Poppyseeds', 9),
(61, 'Cherry', 1),
(62, 'Rhubarb', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `przepisy`
--

CREATE TABLE `przepisy` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(150) NOT NULL,
  `opis` text DEFAULT NULL,
  `sposob_wykonania` longtext NOT NULL,
  `obrazek_url` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `przepisy`
--

INSERT INTO `przepisy` (`id`, `nazwa`, `opis`, `sposob_wykonania`, `obrazek_url`) VALUES
(1, 'Chocolate Cake', 'Delicious, moist chocolate cake – perfect for any occasion.', '1. Preheat the oven to 180°C (356°F).\n2. Mix the flour, sugar, and cocoa powder.\n3. Add the eggs, milk, and oil, then mix thoroughly.\n4. Pour the batter into a baking pan and bake for 30 minutes.', 'https://pl.freepik.com/darmowe-zdjecie/zblizenie-smaczne-ciasto-czekoladowe-z-kawalkami-czekolady-na-blache-do-pieczenia_15773655.htm#fromView=search&page=1&position=1&uuid=584bc98a-2a95-4945-94ca-17c4a7a9449a&query=Chocolate+Cake'),
(2, 'Apple Pie', 'Soft but cripsy shortbread and juicy, refreshing apples. Execellent mix and awesome flavour', 'Prepare the dough: 1. Mix the flour and baking powder together. 2. Chop the mixture with margarine using a knife until crumbly. 3. Add the egg yolks, whole eggs, sugar, vanilla sugar, and sour cream. 4. Knead the dough until smooth. 5. Place the dough in the fridge to chill. Prepare the filling: 1. Peel the apples. 2. Grate them using a coarse grater. 3. Lightly squeeze out the juice. 4. Mix the grated apples with breadcrumbs and vanilla sugar. Assemble the cake: 1. Roll out half of the dough. 2. Place it on a large baking tray (approx. 25×36 cm) lined with baking paper. 3. Spread the apple mixture evenly over the dough. 4. Roll out the remaining dough and place it on top to cover the apples. 5. Prick the top layer with a fork.', 'https://pl.freepik.com/darmowe-zdjecie/widok-z-gory-szarlotka-na-swieto-dziekczynienia-ze-sztuccami-i-liscmi_9700291.htm#fromView=search&page=1&position=0&uuid=a80f8dfc-c200-468c-84f0-faab4cf3868a&query=Apple+Pie'),
(3, 'Simple Sponge Cake with Fruits and Jell-O (Jelly)', 'A light and fluffy sponge cake, perfect for layering with seasonal fruits and a refreshing layer of fruit-flavored gelatin.', '1. Prepare Sponge Cake:\r\n Preheat oven to 170°C (340°F) fan / 180°C (350°F) conventional. Grease pan bottom, line with parchment.\r\n Whisk flour, baking powder, salt. Set aside.\r\nBeat eggs and sugar on high speed for 7-10 mins until pale, thick, and tripled in volume. Add vanilla. Gently fold in dry ingredients in 2-3 additions until just combined. Don\'t overmix.\r\nPour batter into pan. Bake for 25-35 mins until golden and a skewer comes out clean.\r\nCool in pan 5-10 mins, then transfer to wire rack to cool completely.\r\n2. Prepare Fruit & Jell-O Layer:\r\nPlace cooled cake back in a clean springform pan (or use a cake ring).\r\nArrange fresh fruits evenly over the cake.\r\nDissolve Jell-O powder in boiling water. Stir in cold water. Let cool to room temperature (or slightly cooler).\r\nSlowly pour cooled Jell-O over the fruit on the cake.\r\nRefrigerate for 2-3 hours until Jell-O is fully set.\r\n3. Serve:\r\nOnce set, carefully run a thin knife around the edge of the pan, then release sides.\r\nSlice and serve chilled.\r\nEnjoy!', 'https://pl.freepik.com/darmowe-zdjecie/pyszne-ciasto-wisniowe-ze-swiezymi-wisniami_9333510.htm#fromView=search&page=1&position=5&uuid=e1a64af1-bb8d-4df3-bc08-270b2799fb57&query=Simple+Sponge+Cake+with+Fruits+and+Jell-O+'),
(4, 'Basque Burnt Cheesecake', 'A cheesecake with a creamy, almost molten center and a distinctively caramelized, almost \"burnt\" top crust. It\'s crustless and remarkably easy to make.', 'Okay, that sounds like a fantastic Basque Burnt Cheesecake! It\'s famous for its unique texture and rustic appearance. Here\'s a step-by-step recipe for it:\r\n\r\nBasque Burnt Cheesecake\r\n\r\nDescription: A cheesecake with a creamy, almost molten center and a distinctively caramelized, almost \"burnt\" top crust. It\'s crustless and remarkably easy to make, offering a rich, tangy, and subtly sweet experience.\r\n\r\nYields: 8-10 servings\r\nPrep time: 15 minutes\r\nBaking time: 45-65 minutes\r\nChilling time: At least 4 hours (preferably overnight)\r\n\r\nIngredients:\r\n\r\n2 lbs (900g) cream cheese, softened at room temperature (full-fat, like Philadelphia)\r\n1 ½ cups (300g) granulated sugar\r\n4 large eggs, room temperature\r\n2 teaspoons vanilla extract\r\n½ teaspoon salt\r\n1 ¾ cups (420ml) heavy cream (at least 35% fat)\r\n3 tablespoons (25g) all-purpose flour, sifted\r\nEquipment:\r\n\r\n9-inch (23cm) springform pan\r\nParchment paper\r\nLarge mixing bowl\r\nElectric mixer (stand mixer with paddle attachment or hand mixer) or a whisk\r\nRubber spatula\r\nSteps:\r\n\r\nStep 1: Prepare the Pan & Preheat Oven\r\n\r\nPreheat Oven: Preheat your oven to a very high temperature: 200°C (390°F) convection/fan or 220°C (425°F) top and bottom heat. The high heat is crucial for achieving the \"burnt\" exterior.\r\nPrepare Pan: Take your 9-inch (23cm) springform pan. Crumple two sheets of parchment paper individually (this makes them easier to fit), then flatten them slightly. Line the entire inside of the springform pan with the crumpled parchment paper, allowing it to extend 2-3 inches (5-7 cm) above the rim of the pan. This will protect the cheesecake as it rises high and then collapses.\r\nStep 2: Make the Cheesecake Batter\r\n\r\nCream Cheese & Sugar: In a large mixing bowl, add the softened cream cheese and granulated sugar. Using an electric mixer on medium speed, beat until the mixture is very smooth, creamy, and well combined, with no lumps (about 3-5 minutes). Scrape down the sides of the bowl occasionally.\r\nAdd Eggs: Add the eggs one at a time, mixing well after each addition until just combined. Be careful not to overmix at this stage, as too much air can cause cracks later. Stir in the vanilla extract and salt.\r\nAdd Heavy Cream: Gradually pour in the heavy cream while mixing on low speed until just combined.\r\nAdd Flour: Sift the all-purpose flour directly over the batter. Gently mix on the lowest speed or fold in with a rubber spatula until there are no visible streaks of flour. The batter should be smooth and pourable.\r\nStep 3: Bake the Cheesecake\r\n\r\nPour Batter: Pour the cheesecake batter into the prepared parchment-lined springform pan.\r\nBake: Place the pan in the preheated oven. Bake for 45-65 minutes.\r\nWatch for the \"Burn\": The cheesecake is done when the top is deeply caramelized, dark brown, or even almost black in spots (this is desired for \"burnt\"), and the edges are set, but the center is still very jiggly when you gently shake the pan. It will look like a puffed-up soufflé.\r\nAdjust Time: Baking time can vary significantly between ovens. Keep a close eye on it, especially in the last 15-20 minutes. If it\'s browning too fast, you can reduce the temperature slightly, but typically you want that aggressive browning.\r\nCooling: Once baked, remove the cheesecake from the oven. The center will likely sink dramatically as it cools – this is perfectly normal and part of its charm. Let the cheesecake cool at room temperature in the pan for at least 1-2 hours.\r\nStep 4: Chill & Serve\r\n\r\nChill: Once cooled to room temperature, transfer the cheesecake (still in the pan) to the refrigerator and chill for at least 4 hours, but ideally overnight (8-12 hours). Chilling is crucial for the center to set properly and achieve its signature creamy texture.\r\nServe: Once thoroughly chilled, remove the springform pan sides. Carefully peel away the parchment paper from the sides. You can serve it as is, or with fresh berries or a light dusting of powdered sugar if desired. It\'s best served at room temperature or slightly chilled, allowing the creamy interior to shine.\r\nEnjoy your deliciously unique Basque Burnt Cheesecake!', 'https://pl.freepik.com/darmowe-zdjecie/pyszny-swiateczny-sernik-z-zurawina-i-ciasteczkami-w-gwiazdki-na-bialym-stole_15672396.htm#fromView=search&page=1&position=2&uuid=fa363b98-33d2-41cd-a783-40ace8d89fb2&query=Basque+Burnt+Cheesecake'),
(5, 'Carrot Cake with Cream Cheese Frosting', 'A moist, aromatic cake with grated carrots and warm spices, topped with a tangy and creamy cream cheese frosting.', '**Ingredients:**\r\n**For the Cake:**\r\n* 1.5 cups (200g) all-purpose flour\r\n* 1 teaspoon baking soda\r\n* 1/2 teaspoon salt\r\n* 1 teaspoon ground cinnamon\r\n* 1/2 teaspoon ground nutmeg\r\n* 1 cup (200g) granulated sugar\r\n* 1/2 cup (100g) packed light brown sugar\r\n* 3 large eggs\r\n* 3/4 cup (180ml) vegetable oil\r\n* 2 cups (250g) finely grated carrots (about 3 medium carrots)\r\n* 1/2 cup (50g) chopped walnuts or pecans (optional)\r\n**For the Cream Cheese Frosting:**\r\n* 225g (8 oz) cream cheese, softened\r\n* 1/2 cup (115g) unsalted butter, softened\r\n* 3-4 cups (360-480g) powdered sugar, sifted\r\n* 1 teaspoon vanilla extract\r\n* 1-2 tablespoons milk or cream (if needed for consistency)\r\n\r\n**Kroki:**\r\n1.  **Oven & Pan:** Preheat oven to 175°C (350°F) conventional. Grease and flour a 9-inch (23cm) round cake pan.\r\n2.  **Dry Ingredients:** In a large bowl, whisk together flour, baking soda, salt, cinnamon, and nutmeg.\r\n3.  **Wet Ingredients:** In another bowl, whisk together granulated sugar, brown sugar, eggs, and vegetable oil until well combined.\r\n4.  **Combine:** Pour the wet ingredients into the dry ingredients and mix with a spatula until just combined. Stir in the grated carrots and chopped nuts (if using).\r\n5.  **Bake:** Pour the batter into the prepared pan. Bake for 35-45 minutes, or until a wooden skewer inserted into the center comes out clean.\r\n6.  **Cooling:** Let cool in the pan for 10 minutes, then invert onto a wire rack to cool completely.\r\n7.  **Cream Cheese Frosting:** In a large bowl, beat softened cream cheese and butter until smooth and creamy. Gradually add sifted powdered sugar, beating until fluffy. Stir in vanilla extract. If too thick, add milk/cream a tablespoon at a time.\r\n8.  **Frosting & Serving:** Once the cake is completely cool, spread the cream cheese frosting evenly over the top. Decorate with extra chopped nuts if desired. Slice and serve.', 'https://pl.freepik.com/darmowe-zdjecie/wielkanocny-marchwiany-tort-z-mrozeniem-na-blekita-stole_8020895.htm#fromView=search&page=1&position=1&uuid=c8f8572f-396b-40e6-879f-3c4af0748e16&query=Carrot+Cake+with+Cream+Cheese+Frosting'),
(6, 'Flourless Chocolate Cake', 'An intensely chocolatey, dense, and moist cake that boasts the rich flavor of true chocolate. Ideal for chocolate lovers and those avoiding gluten.', '**Ingredients:**\r\n* 200g dark chocolate (min. 70% cocoa), chopped\r\n* 120g butter, cut into cubes\r\n* 150g granulated sugar\r\n* 4 large eggs\r\n* 1 teaspoon vanilla extract\r\n* 2 tablespoons unsweetened cocoa powder\r\n* Pinch of salt\r\n\r\n**Steps:**\r\n1.  **Oven & Pan:** Preheat oven to 170°C (340°F) conventional. Line the bottom and sides of a 20-22cm (8-9 inch) springform pan with parchment paper.\r\n2.  **Melt Chocolate:** In a double boiler or microwave, melt the chocolate with the butter, stirring until smooth. Let it cool slightly.\r\n3.  **Whip Eggs:** In a large bowl, beat eggs with sugar until light and fluffy. Stir in vanilla extract and salt briefly.\r\n4.  **Combine:** Slowly pour the cooled melted chocolate mixture into the egg mixture, gently folding with a spatula. Sift in the cocoa powder and gently fold until just combined.\r\n5.  **Bake:** Pour the batter into the prepared pan. Bake for 30-40 minutes. The center should still be slightly jiggly.\r\n6.  **Cooling:** Let the cake cool completely in the pan. The center may sink as it cools, which is normal. Chill in the refrigerator for at least 2 hours before serving. Serve at room temperature.', 'https://pl.freepik.com/darmowe-zdjecie/pyszne-ciasto-czekoladowe-z-kremem-na-bialym-stole-przedstawione-z-estetycznymi-detalami_17244329.htm#fromView=search&page=1&position=0&uuid=69fd685a-a47c-4f01-87f3-eb3c16cd94a7&query=Flourless+Chocolate+Cake'),
(7, 'Moist Lemon Loaf Cake', 'A classic loaf cake with a tender, moist crumb, intense lemon flavor, and an aromatic glaze.', '**Ingredients:**\r\n* 180g unsalted butter, softened\r\n* 180g granulated sugar\r\n* 3 large eggs\r\n* Zest of 2 lemons\r\n* 200g all-purpose flour\r\n* 1.5 teaspoons baking powder\r\n* Pinch of salt\r\n* 60ml milk\r\n* 60ml lemon juice (from 1-2 lemons)\r\n\r\n**For the Glaze:**\r\n* 1 cup powdered sugar\r\n* 2-3 tablespoons lemon juice\r\n\r\n**Steps:**\r\n1.  **Oven & Pan:** Preheat oven to 170°C (340°F) conventional. Grease and flour a 22cm (9-inch) loaf pan.\r\n2.  **Cake Batter:** In a large bowl, cream together the softened butter and sugar until light and fluffy. Beat in the eggs one at a time, mixing well after each addition. Stir in the lemon zest.\r\n3.  In a separate bowl, whisk together the flour, baking powder, and salt. Add the dry ingredients alternately with the milk to the butter mixture, mixing on low speed until just combined. Finally, pour in the lemon juice and mix briefly.\r\n4.  **Bake:** Pour the batter into the prepared loaf pan. Bake for 45-55 minutes, or until a wooden skewer inserted into the center comes out clean.\r\n5.  **Glaze:** While the cake cools slightly, whisk together the powdered sugar and lemon juice until smooth.\r\n6.  **Finish:** Once the cake has cooled completely, pour the glaze over it. Slice and serve.', 'https://pl.freepik.com/darmowe-zdjecie/plasterki-ciasta-w-talerzu-na-czarno_10637712.htm#fromView=search&page=1&position=1&uuid=2f97ac03-49cf-4b5d-844b-4b0938519100&query=Moist+Lemon+Loaf+Cake'),
(8, 'Classic Walnut Brownies', 'A dense, intensely chocolatey, and slightly chewy American classic, with a crackly top crust and crunchy walnut pieces.', '**Ingredients:**\r\n* 180g unsalted butter\r\n* 200g dark chocolate (min. 60% cocoa), chopped\r\n* 1 cup (200g) granulated sugar\r\n* 3 large eggs\r\n* 1 teaspoon vanilla extract\r\n* 1/2 cup (60g) all-purpose flour\r\n* 1/4 cup (30g) unsweetened cocoa powder\r\n* Pinch of salt\r\n* 1 cup (100g) chopped walnuts\r\n\r\n**Steps:**\r\n1.  **Oven & Pan:** Preheat oven to 170°C (340°F) conventional. Line a 20x20 cm (8x8 inch) square baking pan with parchment paper.\r\n2.  **Melt Chocolate:** In a saucepan over low heat or in a double boiler, melt the butter with the chopped chocolate, stirring until smooth. Let cool slightly.\r\n3.  **Eggs & Sugar:** In a large bowl, beat the eggs with the sugar until light and fluffy. Stir in the vanilla extract.\r\n4.  **Combine:** Add the cooled chocolate-butter mixture to the egg mixture and stir to combine. Then, add the sifted flour, cocoa powder, and salt. Gently mix with a spatula until just combined. Fold in the chopped walnuts.\r\n5.  **Bake:** Pour the batter into the prepared pan. Bake for 25-30 minutes. A wooden skewer inserted into the center should come out moist with a few crumbs – this indicates a fudgy brownie.\r\n6.  **Cooling:** Let cool completely in the pan before cutting into squares.', 'https://pl.freepik.com/darmowe-zdjecie/widok-z-przodu-pyszne-ciasto-czekoladowe-z-migdalami_8327623.htm#fromView=search&page=1&position=0&uuid=c80b63fd-d007-4b00-a9c6-dcbeaab9670e&query=Classic+Walnut+Brownies'),
(10, 'Traditional Poppy Seed Roll', 'A classic festive cake, consisting of a delicate yeast dough wrapped around a rich, moist poppy seed filling with nuts and dried fruits.', '**Ingredients:**\r\n**For the Yeast Dough:**\r\n* 350g all-purpose flour\r\n* 7g (1 packet) active dry yeast\r\n* 50g granulated sugar\r\n* 125ml warm milk\r\n* 50g unsalted butter, melted and cooled\r\n* 1 large egg\r\n* Pinch of salt\r\n**For the Poppy Seed Filling:**\r\n* 250g ground poppy seeds (pre-ground or grind at home)\r\n* 150ml milk\r\n* 50g honey (or sugar)\r\n* 50g raisins\r\n* 50g chopped walnuts\r\n* 1 tablespoon orange zest (optional)\r\n* 1 egg white (lightly beaten)\r\n\r\n**Kroki:**\r\n1.  **Prepare Yeast Dough:** In a large bowl, combine flour, sugar, and yeast. Add warm milk, melted butter, egg, and salt. Knead the dough for about 10 minutes until smooth and elastic. Cover with a clean cloth and let rise in a warm place for 1-1.5 hours, or until doubled in size.\r\n2.  **Prepare Poppy Seed Filling:** While the dough rises, place ground poppy seeds in a saucepan with milk and honey. Bring to a simmer, stirring constantly, until the milk is absorbed and mixture thickens (about 5-7 minutes). Remove from heat and stir in raisins, walnuts, and orange zest (if using). Let cool completely. Once cool, stir in the lightly beaten egg white.\r\n3.  **Assemble Roll:** On a lightly floured surface, roll out the risen dough into a large rectangle (approx. 30x40 cm). Spread the cooled poppy seed filling evenly over the dough, leaving a small border around the edges.\r\n4.  Starting from one long side, tightly roll up the dough into a log. Pinch the seam to seal it.\r\n5.  **Bake:** Carefully transfer the roll (seam-side down) onto a baking sheet lined with parchment paper. Preheat oven to 170°C (340°F) conventional. Bake for 35-45 minutes, or until golden brown.\r\n6.  **Cooling & Glaze:** Let cool completely. You can finish it with a simple powdered sugar glaze (powdered sugar + a little lemon juice/milk) once cooled.', 'https://pl.freepik.com/darmowe-zdjecie/czekoladowe-ruletki-na-stole-pod-bialym-proszkiem_7135990.htm#fromView=search&page=1&position=1&uuid=c4c9ee46-6924-44cb-bcc7-71033c2adc30&query=Traditional+Poppy+Seed+Roll+');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `przepis_skladniki`
--

CREATE TABLE `przepis_skladniki` (
  `id` int(11) NOT NULL,
  `id_przepisu` int(11) DEFAULT NULL,
  `id_produktu` int(11) DEFAULT NULL,
  `ilosc` decimal(6,2) DEFAULT NULL,
  `jednostka` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `przepis_skladniki`
--

INSERT INTO `przepis_skladniki` (`id`, `id_przepisu`, `id_produktu`, `ilosc`, `jednostka`) VALUES
(1, 1, 1, 200.00, 'g'),
(2, 1, 2, 250.00, 'g'),
(3, 1, 3, 3.00, 'szt'),
(4, 1, 4, 150.00, 'ml');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `kategorie`
--
ALTER TABLE `kategorie`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `produkty`
--
ALTER TABLE `produkty`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kategorii` (`id_kategorii`);

--
-- Indeksy dla tabeli `przepisy`
--
ALTER TABLE `przepisy`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `przepis_skladniki`
--
ALTER TABLE `przepis_skladniki`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_przepisu` (`id_przepisu`),
  ADD KEY `id_produktu` (`id_produktu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategorie`
--
ALTER TABLE `kategorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `produkty`
--
ALTER TABLE `produkty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `przepisy`
--
ALTER TABLE `przepisy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `przepis_skladniki`
--
ALTER TABLE `przepis_skladniki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `produkty`
--
ALTER TABLE `produkty`
  ADD CONSTRAINT `produkty_ibfk_1` FOREIGN KEY (`id_kategorii`) REFERENCES `kategorie` (`id`);

--
-- Constraints for table `przepis_skladniki`
--
ALTER TABLE `przepis_skladniki`
  ADD CONSTRAINT `przepis_skladniki_ibfk_1` FOREIGN KEY (`id_przepisu`) REFERENCES `przepisy` (`id`),
  ADD CONSTRAINT `przepis_skladniki_ibfk_2` FOREIGN KEY (`id_produktu`) REFERENCES `produkty` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
