
//  taking inputs from the dropdown box
var change = document.getElementById("MealsNum");
var mealNum = parseInt(change.options[change.selectedIndex].text);
change.onchange = function () {
    var text = this.options[this.selectedIndex].text;
    mealNum = this.options[this.selectedIndex].text;
    mealNum = parseInt(mealNum);
    console.log(mealNum);
}
var change2 = document.getElementById("MealCalorie");
var TotalCalories = parseInt(change2.options[change2.selectedIndex].text);
change2.onchange = function () {
    var text2 = this.options[this.selectedIndex].text;
    console.log(text2 + "this is");
    TotalCalories = this.options[this.selectedIndex].text;
    TotalCalories = parseInt(TotalCalories);
    console.log(TotalCalories);
}

var change3 = document.getElementById("FoodType");
var FoodType = change3.options[change3.selectedIndex].text;
console.log("F " + FoodType);
change3.onchange = function () {
    var text3 = this.options[this.selectedIndex].text;
    console.log(String(text3) + "this is");
    FoodType = this.options[this.selectedIndex].text;
    console.log("F " + FoodType);

}

// creating arrays for storing the food data under ANYTHING diet type  for each part of the day

arrayOfBreakfastN = [
    {
        FoodName: '1 large Boiled Egg',
        FoodCalorie: "78",
        image: 'ImagesOfMeal/Boiled Egg.jpg',

    },
    {
        FoodName: '1 large Fried Egg',
        FoodCalorie: '90',
        image: 'ImagesOfMeal/Fried.jpg',

    },
    {
        FoodName: '1 large Poached Egg',
        FoodCalorie: '71',
        image: 'ImagesOfMeal/PoachedEgg.jpg',

    },
    {
        FoodName: '1 Large Banana',
        FoodCalorie: '121',
        image: '121',

    },
    {
        FoodName: '1 Small Banana',
        FoodCalorie: '90',
        image: 'ImagesOfMeal/Banana.jpg',

    },
    {
        FoodName: 'Strawberry Smoothie',
        FoodCalorie: '162.5',
        image: 'ImagesOfMeal/StrawberrySmoothie.jpg',

    },

    {
        FoodName: 'Banana Smoothie',
        FoodCalorie: '200',
        image: 'ImagesOfMeal/BananaSmoothie.jpg',

    },
    {
        FoodName: '1 cup (250ml) Full Cream Milk',
        FoodCalorie: '150',
        image: 'ImagesOfMeal/milk.jpg',

    },
    {
        FoodName: '1 cup of raw tea(250ml)',
        FoodCalorie: '40',
        image: 'ImagesOfMeal/rawtea.jpg',

    },
    {
        FoodName: '1 cup of milk tea(250ml)',
        FoodCalorie: '200',
        image: 'ImagesOfMeal/milktea.jpg',

    },
    {
        FoodName: '1 bowl of cereal with milk',
        FoodCalorie: '100',
        image: 'ImagesOfMeal/Cereal.jpg',

    },
    {
        FoodName: 'Egg and 1 slice Bread with Avacado Spread',
        FoodCalorie: '210',
        image: 'ImagesOfMeal/SliceBreadWithAvacado.jpg',

    },
    {
        FoodName: '1 slice Bread with Margarine Spread',
        FoodCalorie: '150',
        image: 'ImagesOfMeal/BreadWithSpread.jpg',

    },
    {
        FoodName: '1 serving of chia seed pudding',
        FoodCalorie: '210',
        image: 'ImagesOfMeal/ChiaseedPudding.jpg',

    },
];

arrayOflunchN =
    [
        {
            FoodName: '1 wrap(Chicken/Vegetable)',
            FoodCalorie: "200",
            image: 'ImagesOfMeal/wrap.jpg',

        },
        {
            FoodName: '1 Sandwich',
            FoodCalorie: '100',
            image: 'ImagesOfMeal/Sandwich.jpg',

        },
        {
            FoodName: '2 slices of bread with avocado and spinach',
            FoodCalorie: '71',
            image: 'ImagesOfMeal/SpinachAvobread.jpg',

        },
        {
            FoodName: ' 1 bowl of rice and chicken',
            FoodCalorie: '343 calories',
            image: 'ImagesOfMeal/ChickenRiceBowl.jpg',

        },
        {
            FoodName: 'Salmon and Rice Bowl',
            FoodCalorie: '397.8',
            image: 'ImagesOfMeal/Banana.jpg',

        },
        {
            FoodName: 'Stir Fry Noodels',
            FoodCalorie: '160',
            image: 'ImagesOfMeal/StirFryNoodles.jpg',

        },

        {
            FoodName: ' Egg and Vegetable Frittata',
            FoodCalorie: '129',
            image: 'ImagesOfMeal/ Egg and Vegetable Frittata.jpg',

        },
        {
            FoodName: 'Bowl of avocado and tomato salad',
            FoodCalorie: '97',
            image: 'ImagesOfMeal/avocadoTomatoSalad.jpg',

        },
        {
            FoodName: ' 1 cup of roasted cauliflower',
            FoodCalorie: '40',
            image: 'ImagesOfMeal/Cauliflower.jpg',

        },
        {
            FoodName: '1 piece tandoori chicken ',
            FoodCalorie: '265 calories',
            image: 'ImagesOfMeal/Tandoori.jpg',

        },
        {
            FoodName: '1 ounce of mixed nuts',
            FoodCalorie: '170',
            image: 'ImagesOfMeal/1ounce of nuts.jpg',

        },
        {
            FoodName: 'Cabbage Salad',
            FoodCalorie: '22',
            image: 'ImagesOfMeal/Cabbage.jpg',

        },
        {
            FoodName: '1 piece of big beef with cauliflower',
            FoodCalorie: '228',
            image: 'ImagesOfMeal/onePieceBeefWithVeggies.jpg',

        },
        {
            FoodName: 'Fried Carrots',
            FoodCalorie: '170',
            image: 'ImagesOfMeal/FriedCarrot.jpg',

        },
    ];

arrayOfbrunchN =
    [
        {
            FoodName: 'Hummus per serving',
            FoodCalorie: "166",
            image: 'ImagesOfMeal/hummus.jpg',

        },
        {
            FoodName: '1 medium sized protein bar',
            FoodCalorie: '230',
            image: 'ImagesOfMeal/proteinBar.jpg',

        },
        {
            FoodName: '1 large (230 g) Pears',
            FoodCalorie: '131',
            image: 'ImagesOfMeal/Pears.jpg',

        },
        {
            FoodName: ' 1 cup of Latte/Milk Coffee',
            FoodCalorie: '103',
            image: 'ImagesOfMeal/latte/milkcoffee.jpg',

        },
        {
            FoodName: '1 Small Banana',
            FoodCalorie: '90',
            image: 'ImagesOfMeal/Banana.jpg',

        },
        {
            FoodName: '2 pieces of Homemade Blueberry Pancakes ',
            FoodCalorie: '160',
            image: 'ImagesOfMeal/pancake.jpg',

        },

        {
            FoodName: 'Banana Smoothie',
            FoodCalorie: '200',
            image: 'ImagesOfMeal/BananaSmoothie.jpg',

        },
        {
            FoodName: '2 pieces of cookies',
            FoodCalorie: '150',
            image: 'ImagesOfMeal/cookies.jpg',

        },
        {
            FoodName: '1 cup of raw tea(250ml)',
            FoodCalorie: '40',
            image: 'ImagesOfMeal/Boiled Egg.jpg',

        },
        {
            FoodName: '1 bowl of popcorn',
            FoodCalorie: '180',
            image: 'ImagesOfMeal/popcorn.jpg',

        },
        {
            FoodName: 'Strawberries 8 medium (147 g/ 5.3 oz)',
            FoodCalorie: '70',
            image: 'ImagesOfMeal/strawberries.jpg',

        },
        {
            FoodName: '71 grams small french fries',
            FoodCalorie: '222',
            image: 'ImagesOfMeal/frenchFry..jpg',

        },
        {
            FoodName: '1 slice Bread with Margarine Spread',
            FoodCalorie: '150',
            image: 'ImagesOfMeal/Boiled Egg.jpg',

        },
        {
            FoodName: '1 serving of chia seed pudding',
            FoodCalorie: '210',
            image: 'ImagesOfMeal/ChiaseedPudding.jpg',

        },
    ];

arrayOfdinnerN =
    [
        {
            FoodName: '1 wrap(Chicken/Vegetable)',
            FoodCalorie: "200",
            image: 'ImagesOfMeal/wrap.jpg',

        },
        {
            FoodName: '1 Sandwich',
            FoodCalorie: '100',
            image: 'ImagesOfMeal/Sandwich.jpg',

        },
        {
            FoodName: '2 slices of bread with avocado and spinach',
            FoodCalorie: '71',
            image: 'ImagesOfMeal/SpinachAvobread.jpg',

        },
        {
            FoodName: ' Salad with lettuce tomato and cheese',
            FoodCalorie: '70 calories',
            image: 'ImagesOfMeal/lettucesalad.jpg',

        },
        {
            FoodName: 'Healthy sushi bowl',
            FoodCalorie: '250',
            image: 'ImagesOfMeal/sushiBowl.jpg',

        },
        {
            FoodName: 'Stir Fry Noodels',
            FoodCalorie: '160',
            image: 'ImagesOfMeal/StirFryNoodles.jpg',

        },

        {
            FoodName: 'Vegetable Frittata',
            FoodCalorie: '100',
            image: 'ImagesOfMeal/ Egg and Vegetable Frittata.jpg',

        },
        {
            FoodName: 'Bowl of light dinner salad',
            FoodCalorie: '97',
            image: 'ImagesOfMeal/light salad.jpg',

        },
        {
            FoodName: ' 1 cup of roasted cauliflower',
            FoodCalorie: '40',
            image: 'ImagesOfMeal/Cauliflower.jpg',

        },
        {
            FoodName: '1-cup (8-ounce) serving: Assorted melon;',
            FoodCalorie: '72',
            image: 'ImagesOfMeal/melon.jpg',

        },
        {
            FoodName: '1 cup of beet juice',
            FoodCalorie: '100',
            image: 'ImagesOfMeal/beetJuice.jpg',

        },
        {
            FoodName: 'Cabbage Salad',
            FoodCalorie: '22',
            image: 'ImagesOfMeal/Cabbage.jpg',

        },
        {
            FoodName: 'Vegetable Rice Bowl',
            FoodCalorie: '228',
            image: 'ImagesOfMeal/Vegetable Rice Bowl.jpg',

        },
        {
            FoodName: 'Fried Carrots',
            FoodCalorie: '170',
            image: 'ImagesOfMeal/FriedCarrot.jpg',

        },
    ];
arrayOfsnackN =

    [
        {
            FoodName: 'Hummus per serving',
            FoodCalorie: "166",
            image: 'ImagesOfMeal/hummus.jpg',

        },
        {
            FoodName: 'Two crackers with cheese',
            FoodCalorie: '120',
            image: 'ImagesOfMeal/proteinBar.jpg',

        },
        {
            FoodName: '1 large (230 g) Pears',
            FoodCalorie: '131',
            image: 'ImagesOfMeal/Pears.jpg',

        },
        {
            FoodName: ' 2 kiwis',
            FoodCalorie: '82',
            image: 'ImagesOfMeal/Banana.jpg',

        },
        {
            FoodName: '1 Small Banana',
            FoodCalorie: '90',
            image: 'ImagesOfMeal/Banana.jpg',

        },
        {
            FoodName: ' 1-ounce (28-gram) serving of dark chocolate ',
            FoodCalorie: '155',
            image: 'ImagesOfMeal/DarkChoc.jpg',

        },

        {
            FoodName: 'Banana Smoothie',
            FoodCalorie: '200',
            image: 'ImagesOfMeal/BananaSmoothie.jpg',

        },
        {
            FoodName: '1 pieces of cookie',
            FoodCalorie: '80',
            image: 'ImagesOfMeal/cookies.jpg',

        },
        {
            FoodName: '1 large Boiled Egg',
            FoodCalorie: "78",
            image: 'ImagesOfMeal/Boiled Egg.jpg',

        },
        {
            FoodName: '1 bowl of popcorn',
            FoodCalorie: '180',
            image: 'ImagesOfMeal/popcorn.jpg',

        },
        {
            FoodName: 'Baked falafel',
            FoodCalorie: '70',
            image: 'ImagesOfMeal/Falafel.jpg',

        },
        {
            FoodName: 'Soft tofu with seasame seeds',
            FoodCalorie: ' 85',
            image: 'ImagesOfMeal/tofu.jpg',

        },
        {
            FoodName: '1 slice Bread with Margarine Spread',
            FoodCalorie: '150',
            image: 'ImagesOfMeal/BreadWithSpread.jpg',

        },
        {
            FoodName: 'Veggie sticks with cashew dip',
            FoodCalorie: '130',
            image: 'ImagesOfMeal/ChiaseedPudding.jpg',

        },
    ];

// creating arrays for storing the food data under VEGAN diet type  for each part of the day
arrayOfBreakfastVegan = [
    {
        FoodName: 'Bowl of cereals with soy milk',
        FoodCalorie: "78",
        image: 'ImagesOfMeal/Boiled Egg.jpg',

    },
    {
        FoodName: '2 slice of bread with spinach',
        FoodCalorie: '90',
        image: 'ImagesOfMeal/spinach.jpg',

    },
    {
        FoodName: 'Avocado and Tomato slices with chickpeas',
        FoodCalorie: '121',
        image: 'ImagesOfMeal/TOMsalad.jpg',

    },
    {
        FoodName: 'Bok Choy with sauce',
        FoodCalorie: '121',
        image: 'ImagesOfMeal/Bok Choy.jpg',

    },
    {
        FoodName: '1 Small Banana',
        FoodCalorie: '90',
        image: 'ImagesOfMeal/Banana.jpg',

    },
    {
        FoodName: 'Strawberry Smoothie',
        FoodCalorie: '162.5',
        image: 'ImagesOfMeal/StrawberrySmoothie.jpg',

    },

    {
        FoodName: 'Banana Smoothie',
        FoodCalorie: '200',
        image: 'ImagesOfMeal/BananaSmoothie.jpg',

    },
    {
        FoodName: '1 cup (250ml) soy/almond Milk',
        FoodCalorie: '131',
        image: 'ImagesOfMeal/milk.jpg',

    },
    {
        FoodName: '1 cup of raw tea(250ml)',
        FoodCalorie: '40',
        image: 'ImagesOfMeal/rawtea.jpg',

    },
    {
        FoodName: '1 cup of soy milk tea(250ml)',
        FoodCalorie: '180',
        image: 'ImagesOfMeal/milktea.jpg',

    },
    {
        FoodName: 'Broccoli with roasted potatoes',
        FoodCalorie: '200',
        image: 'ImagesOfMeal/Broccoli.jpg',

    },
    {
        FoodName: 'Kiwi, Grapes and Strawberries ',
        FoodCalorie: '100',
        image: 'ImagesOfMeal/MixedFruit.jpg',

    },
    {
        FoodName: '1 slice Bread with Plant-based margarine',
        FoodCalorie: '150',
        image: 'ImagesOfMeal/BreadWithSpread.jpg',

    },
    {
        FoodName: '1 serving of chia seed pudding',
        FoodCalorie: '210',
        image: 'ImagesOfMeal/ChiaseedPudding.jpg',

    },
];

arrayOflunchVegan =
    [
        {
            FoodName: '1 wrap(Vegetable)',
            FoodCalorie: "130",
            image: 'ImagesOfMeal/wrap.jpg',

        },
        {
            FoodName: 'Vegan Burger',
            FoodCalorie: '177',
            image: 'ImagesOfMeal/Sandwich.jpg',

        },
        {
            FoodName: '2 slices of bread with avocado and spinach',
            FoodCalorie: '71',
            image: 'ImagesOfMeal/SpinachAvobread.jpg',

        },
        {
            FoodName: ' 1 bowl of rice and vegetable',
            FoodCalorie: '343 calories',
            image: 'ImagesOfMeal/ChickenRiceBowl.jpg',

        },
        {
            FoodName: 'Vegan Pasta Bowl',
            FoodCalorie: '367.8',
            image: 'ImagesOfMeal/Banana.jpg',

        },
        {
            FoodName: 'Stir Fry Noodels',
            FoodCalorie: '160',
            image: 'ImagesOfMeal/StirFryNoodles.jpg',

        },

        {
            FoodName: 'Vegetable Frittata',
            FoodCalorie: '129',
            image: 'ImagesOfMeal/ Egg and Vegetable Frittata.jpg',

        },
        {
            FoodName: 'Bowl of avocado and tomato salad',
            FoodCalorie: '97',
            image: 'ImagesOfMeal/avocadoTomatoSalad.jpg',

        },
        {
            FoodName: ' 1 cup of roasted cauliflower',
            FoodCalorie: '40',
            image: 'ImagesOfMeal/Cauliflower.jpg',

        },
        {
            FoodName: 'Lettuce salad bowl ',
            FoodCalorie: '154.6',
            image: 'ImagesOfMeal/lettucesalad.jpg',

        },
        {
            FoodName: '1 ounce of mixed nuts',
            FoodCalorie: '170',
            image: 'ImagesOfMeal/1ounce of nuts.jpg',

        },
        {
            FoodName: 'Cabbage Salad',
            FoodCalorie: '22',
            image: 'ImagesOfMeal/Cabbage.jpg',

        },
        {
            FoodName: '80g of tofu',
            FoodCalorie: '117',
            image: 'ImagesOfMeal/tofu.jpg',

        },
        {
            FoodName: 'Fried Carrots',
            FoodCalorie: '170',
            image: 'ImagesOfMeal/FriedCarrot.jpg',

        },
    ];
arrayOfdinnerVegan =
    [
        {
            FoodName: 'Vegan shushi',
            FoodCalorie: "200",
            image: 'ImagesOfMeal/sushiBowl.jpg',

        },
        {
            FoodName: 'Vegan Sandwich',
            FoodCalorie: '100',
            image: 'ImagesOfMeal/Sandwich.jpg',

        },
        {
            FoodName: '2 slices of bread with avocado and spinach',
            FoodCalorie: '71',
            image: 'ImagesOfMeal/SpinachAvobread.jpg',

        },
        {
            FoodName: ' Salad with lettuce tomato and vegan cheese',
            FoodCalorie: '70 calories',
            image: 'ImagesOfMeal/lettucesalad.jpg',

        },
        {
            FoodName: ' 6 small patties of falafel',
            FoodCalorie: 333,
            image: 'ImagesOfMeal/Falafel.jpg',

        },
        {
            FoodName: 'Stir Fry Noodels',
            FoodCalorie: '160',
            image: 'ImagesOfMeal/StirFryNoodles.jpg',

        },

        {
            FoodName: 'Vegetable Frittata',
            FoodCalorie: '100',
            image: 'ImagesOfMeal/ Egg and Vegetable Frittata.jpg',

        },
        {
            FoodName: 'Bowl of light dinner salad',
            FoodCalorie: '97',
            image: 'ImagesOfMeal/light salad.jpg',

        },
        {
            FoodName: ' 1 cup of roasted cauliflower',
            FoodCalorie: '40',
            image: 'ImagesOfMeal/Cauliflower.jpg',

        },
        {
            FoodName: '1-cup (8-ounce) serving: Assorted melon;',
            FoodCalorie: '72',
            image: 'ImagesOfMeal/melon.jpg',

        },
        {
            FoodName: '1 cup of beet juice',
            FoodCalorie: '100',
            image: 'ImagesOfMeal/beetJuice.jpg',

        },
        {
            FoodName: 'Cabbage Salad',
            FoodCalorie: '22',
            image: 'ImagesOfMeal/Cabbage.jpg',

        },
        {
            FoodName: 'Vegetable Rice Bowl',
            FoodCalorie: '228',
            image: 'ImagesOfMeal/Vegetable Rice Bowl.jpg',

        },
        {
            FoodName: 'Fried Carrots',
            FoodCalorie: '170',
            image: 'ImagesOfMeal/FriedCarrot.jpg',

        },
    ];
arrayOfbrunchVegan =
    [
        {
            FoodName: 'Hummus per serving',
            FoodCalorie: "166",
            image: 'ImagesOfMeal/hummus.jpg',

        },
        {
            FoodName: '1 medium sized granola bar',
            FoodCalorie: '99',
            image: 'ImagesOfMeal/proteinBar.jpg',

        },
        {
            FoodName: '1 large (230 g) Pears',
            FoodCalorie: '131',
            image: 'ImagesOfMeal/Pears.jpg',

        },
        {
            FoodName: ' 1 cup of Soy Milk Coffee',
            FoodCalorie: '103',
            image: 'ImagesOfMeal/latte/milkcoffee.jpg',

        },
        {
            FoodName: '1 Small Banana',
            FoodCalorie: '90',
            image: 'ImagesOfMeal/Banana.jpg',

        },
        {
            FoodName: '2 pieces of Homemade Blueberry Vegan Pancakes ',
            FoodCalorie: '160',
            image: 'ImagesOfMeal/pancake.jpg',

        },

        {
            FoodName: 'Banana Smoothie',
            FoodCalorie: '200',
            image: 'ImagesOfMeal/BananaSmoothie.jpg',

        },
        {
            FoodName: '2 piece of vegan cookies',
            FoodCalorie: '250',
            image: 'ImagesOfMeal/cookies.jpg',

        },
        {
            FoodName: '1 cup of raw tea(250ml)',
            FoodCalorie: '40',
            image: 'ImagesOfMeal/Boiled Egg.jpg',

        },
        {
            FoodName: '1 bowl of popcorn',
            FoodCalorie: '180',
            image: 'ImagesOfMeal/popcorn.jpg',

        },
        {
            FoodName: 'Strawberries 8 medium (147 g/ 5.3 oz)',
            FoodCalorie: '70',
            image: 'ImagesOfMeal/strawberries.jpg',

        },
        {
            FoodName: '71 grams small french fries',
            FoodCalorie: '222',
            image: 'ImagesOfMeal/frenchFry.jpg',

        },
        {
            FoodName: '1 slice Bread with Vegan Margarine Spread',
            FoodCalorie: '150',
            image: 'ImagesOfMeal/Boiled Egg.jpg',

        },
        {
            FoodName: '1 serving of chia seed pudding',
            FoodCalorie: '210',
            image: 'ImagesOfMeal/ChiaseedPudding.jpg',

        },
    ];


arrayOfsnackVegan =

    [
        {
            FoodName: 'Hummus per serving',
            FoodCalorie: "166",
            image: 'ImagesOfMeal/hummus.jpg',

        },
        {
            FoodName: 'Two crackers with cheese',
            FoodCalorie: '120',
            image: 'ImagesOfMeal/proteinBar.jpg',

        },
        {
            FoodName: '1 large (230 g) Pears',
            FoodCalorie: '131',
            image: 'ImagesOfMeal/Pears.jpg',

        },
        {
            FoodName: ' 2 kiwis',
            FoodCalorie: '82',
            image: 'ImagesOfMeal/Banana.jpg',

        },
        {
            FoodName: '1 Small Banana',
            FoodCalorie: '90',
            image: 'ImagesOfMeal/Banana.jpg',

        },
        {
            FoodName: ' 1-ounce (28-gram) serving of vegan dark chocolate ',
            FoodCalorie: '1544',
            image: 'ImagesOfMeal/DarkChoc.jpg',

        },

        {
            FoodName: 'Banana Smoothie',
            FoodCalorie: '200',
            image: 'ImagesOfMeal/BananaSmoothie.jpg',

        },
        {
            FoodName: '1 pieces of cookie',
            FoodCalorie: '80',
            image: 'ImagesOfMeal/cookies.jpg',

        },
        {
            FoodName: '1 large Boiled Egg',
            FoodCalorie: "78",
            image: 'ImagesOfMeal/Boiled Egg.jpg',

        },
        {
            FoodName: '1 bowl of popcorn',
            FoodCalorie: '180',
            image: 'ImagesOfMeal/popcorn.jpg',

        },
        {
            FoodName: 'Baked falafel',
            FoodCalorie: '70',
            image: 'ImagesOfMeal/Falafel.jpg',

        },
        {
            FoodName: 'Soft tofu with seasame seeds',
            FoodCalorie: ' 85',
            image: 'ImagesOfMeal/tofu.jpg',

        },
        {
            FoodName: '1 slice Bread with Margarine Spread',
            FoodCalorie: '150',
            image: 'ImagesOfMeal/BreadWithSpread.jpg',

        },
        {
            FoodName: 'Veggie sticks with cashew dip',
            FoodCalorie: '130',
            image: 'ImagesOfMeal/ChiaseedPudding.jpg',

        },
    ];
// end of arrays of food





// the function to generate meals based on user inputs

function generateMeal() {
    //  declaration of food calories for each part of the day
    let breakCalorie = 0;
    let brunchCalorie = 0;
    let lunchCalorie = 0;
    let dinnerCalorie = 0;
    let snackCalorie = 0;


    // based on diet type assigning the arrays with the appropriate values 
    if (FoodType.localeCompare("vegan") == -1) {
        console.log("FOD:" + FoodType);
        arrayOfBreakfast = arrayOfBreakfastN;
        arrayOflunch = arrayOflunchN;
        arrayOfbrunch = arrayOfbrunchN;
        arrayOfdinner = arrayOfdinnerN;
        arrayOfsnack = arrayOfsnackN;
    }
    if (FoodType.localeCompare("vegan") == 1) {
        console.log("FOD:" + FoodType);
        arrayOfBreakfast = arrayOfBreakfastVegan;
        arrayOfbrunch = arrayOfbrunchVegan;
        arrayOflunch = arrayOflunchVegan;
        arrayOfdinner = arrayOfdinnerVegan;
        arrayOfsnack = arrayOfsnackVegan;
    }

    // converting number of meals and total calories from input to integer values
    mealNum = parseInt(mealNum);
    TotalCalories = parseInt(TotalCalories);

    //   based on meal Number, dividing the calories for different parts of the day
    if (mealNum == 2) {
        console.log("meal is 2")
        breakCalorie = parseInt((2 / 4) * TotalCalories);
        dinnerCalorie = parseInt((2 / 4) * TotalCalories);
    }

    if (mealNum == 3) {
        breakCalorie = parseInt((3 / 7) * TotalCalories);
        lunchCalorie = parseInt((2 / 7) * TotalCalories);
        dinnerCalorie = parseInt((2 / 7) * TotalCalories);
    }

    if (mealNum == 4) {
        console.log(breakCalorie);
        breakCalorie = parseInt((3 / 8) * TotalCalories);
        lunchCalorie = parseInt((2 / 8) * TotalCalories);
        dinnerCalorie = parseInt((2 / 8) * TotalCalories);
        snackCalorie = parseInt((1 / 8) * TotalCalories);
    }

    if (mealNum == 5) {
        breakCalorie = parseInt((2.5 / 10) * TotalCalories);
        brunchCalorie = parseInt((1.5 / 10) * TotalCalories);
        lunchCalorie = parseInt((2.5 / 10) * TotalCalories);
        dinnerCalorie = parseInt((2 / 10) * TotalCalories);
        snackCalorie = parseInt((1.5 / 10) * TotalCalories);
    }


    // based on number of meals, the meals are assigned for the different part of the day
    // to count the number of meals which are added on the plan
    var countOfAdded = 0;
    //    for  adding meals to breakfast
    if (mealNum == 2 || mealNum == 3 || mealNum == 4 || mealNum == 5) {

        //  for reloading the page if already meal exists 
        if (document.contains(document.getElementById("p"))) {
            location.reload();
        }

        document.getElementById("b").style.display = "block";
        // running the loop to generate random meals from the breakfast array until the breakfast calorie becomes 0 or less
        for (let i = Number.parseInt(Math.random() * ((arrayOfBreakfast.length - 1) + 1)); breakCalorie > 0; i = Number.parseInt(Math.random() * ((arrayOfBreakfast.length - 1) + 1))) {

            countOfAdded = countOfAdded + 1;
            // checking whether the meal's calorie is approximately within the range of total breakkie calories
            // if it's within range creating the section for outputting the meal
            if (breakCalorie + 70 >= arrayOfBreakfast[i].FoodCalorie) {

                const element = document.getElementById('BreakkieOutput');
                const paraimage = document.createElement("img");
                paraimage.src = arrayOfBreakfast[i].image;
                element.appendChild(paraimage);
                const para = document.createElement("p");
                para.id = "p";
                const node = document.createTextNode(`Breakfast Meal ${countOfAdded}: ${arrayOfBreakfast[i].FoodName}.                
                Calories Per Serving: ${arrayOfBreakfast[i].FoodCalorie} calories.`);

                para.appendChild(node);
                element.appendChild(para);
                element.style.clear = "both";
                breakCalorie = breakCalorie - arrayOfBreakfast[i].FoodCalorie;
                console.log("BREAK:" + breakCalorie);
            }
            // if meal's calorie is not in range the meal skipped and the loop continues and the meal is not counted towards the total counter 
            else {
                countOfAdded = countOfAdded - 1;
                continue;
            }
        }
    }
    //similarly running the same process as breakfast part for adding meals on the lunch section
    if (mealNum == 3 || mealNum == 4 || mealNum == 5) {
        document.getElementById("l").style.display = "block";

        counter = 0;
        for (let j = Number.parseInt(Math.random() * ((arrayOflunch.length - 1) + 1)); lunchCalorie >= 0; j = Number.parseInt(Math.random() * ((arrayOflunch.length - 1) + 1))) {
            console.log("I2:" + arrayOflunch[j].FoodCalorie);
            counter = counter + 1;
            if (lunchCalorie + 70 >= arrayOflunch[j].FoodCalorie) {
                const paraimage3 = document.createElement("img");
                paraimage3.src = arrayOflunch[j].image;
                const element2 = document.getElementById('lunchOutput');
                element2.appendChild(paraimage3);
                const para2 = document.createElement("p");
                const node2 = document.createTextNode(`Lunch Meal ${counter}: ${arrayOflunch[j].FoodName}.                
    Calories Per Serving: ${arrayOflunch[j].FoodCalorie} calories.`);
                para2.appendChild(node2);

                element2.appendChild(para2);
                lunchCalorie = lunchCalorie - arrayOflunch[j].FoodCalorie;

            }
            else {
                counter = counter - 1;
                continue;
            }

        }
    }
    //similarly running the same process as breakfast part for adding meals on the dinner section
    if (mealNum == 3 || mealNum == 4 || mealNum == 5 || mealNum == 2) {
        document.getElementById("d").style.display = "block";
        counter = 0;
        for (let j = Number.parseInt(Math.random() * ((arrayOfdinner.length - 1) + 1)); dinnerCalorie >= 0; j = Number.parseInt(Math.random() * ((arrayOfdinner.length - 1) + 1))) {
            console.log("I3:" + arrayOfdinner[j].FoodCalorie);
            console.log("dinnercal:" + dinnerCalorie)
            counter = counter + 1;
            if (dinnerCalorie + 70 >= arrayOfdinner[j].FoodCalorie) {
                const paraimage2 = document.createElement("img");
                paraimage2.src = arrayOfdinner[j].image;
                const element3 = document.getElementById('DinnerOutput');
                element3.appendChild(paraimage2);
                const para3 = document.createElement("p");
                const node3 = document.createTextNode(
                    `Dinner Meal ${counter}: ${arrayOfdinner[j].FoodName}. 
       Calories Per Serving: ${arrayOfdinner[j].FoodCalorie} calories.`);
                para3.appendChild(node3);
                element3.appendChild(para3);
                element3.style.clear = "both";
                dinnerCalorie = dinnerCalorie - arrayOfdinner[j].FoodCalorie;
            }
            else {
                counter = counter - 1;
                continue;
            }
        }
    }
    //similarly running the same process as breakfast part for adding meals on the snack section
    if (mealNum == 5 || mealNum == 4) {
        document.getElementById("s").style.display = "block";
        counter = 0;
        for (let j = Number.parseInt(Math.random() * ((arrayOfsnack.length - 1) + 1)); snackCalorie >= 0; j = Number.parseInt(Math.random() * ((arrayOfsnack.length - 1) + 1))) {
            console.log("I4:" + arrayOfsnack[j].FoodCalorie);
            counter = counter + 1;
            if (snackCalorie + 70 >= arrayOfsnack[j].FoodCalorie) {
                const paraimage5 = document.createElement("img");
                paraimage5.src = arrayOfsnack[j].image;
                const element5 = document.getElementById('SnackOutput');
                element5.appendChild(paraimage5);
                const para5 = document.createElement("p");
                const node5 = document.createTextNode
                    (`Snack Meal ${counter}: ${arrayOfsnack[j].FoodCalorie}.                
    Calories Per Serving: ${arrayOfsnack[j].FoodCalorie} calories.`);
                para5.appendChild(node5);
                element5.appendChild(para5);
                snackCalorie = snackCalorie - arrayOfsnack[j].FoodCalorie;
            }
            else {
                counter = counter - 1;
                continue;
            }

        }
    }

    //similarly running the same process as breakfast part for adding meals on the brunch section
    if (mealNum == 5) {
        document.getElementById("br").style.display = "block";
        counter = 0;
        for (let j = Number.parseInt(Math.random() * ((arrayOfbrunch.length - 1) + 1)); brunchCalorie >= 0; j = Number.parseInt(Math.random() * ((arrayOfbrunch.length - 1) + 1))) {
            console.log("I3:" + arrayOfbrunch[j].FoodCalorie);
            counter = counter + 1;
            if (brunchCalorie + 70 >= arrayOfbrunch[j].FoodCalorie) {
                const paraimage4 = document.createElement("img");
                paraimage4.src = arrayOfbrunch[j].image;
                const element4 = document.getElementById('BrunchOutput');
                element4.appendChild(paraimage4);
                const para4 = document.createElement("p");
                const node4 = document.createTextNode
                    (`Brunch Meal ${counter}: ${arrayOfbrunch[j].FoodName}.                
        Calories Per Serving: ${arrayOfbrunch[j].FoodCalorie} calories.`);
                para4.appendChild(node4);
                element4.appendChild(para4);
                brunchCalorie = brunchCalorie - arrayOfbrunch[j].FoodCalorie;
            }
            else {
                counter = counter - 1;
                continue;
            }

        }
    }
    // The end of meal outputs
    document.getElementById("Bon").style.display = "block";

}


