var data = {
"items": [
    {
        "url": "images/american_rice.jpg",
        "caption": "American Fried Rice"
    },
    {
        "url": "images/krapao.jpg",
        "caption": "Krapao Mu"
    },
    {
        "url": "images/fish_and_chip.jpg",
        "caption": "Fish and Chip"
    },
    {
        "url": "images/porridge.jpg",
        "caption": "Porridge"
    },
    {
        "url": "images/spaghetti.jpg",
        "caption": "Spaghetti"
    },
    {
        "url": "images/steak.jpg",
        "caption": "Steak"
    },
    {
        "url": "images/cake.jpg",
        "caption": "Cake"
    },
    {
        "url": "images/crepe.jpg",
        "caption": "Crepe"
    },
    {
        "url": "images/sundae.jpg",
        "caption": "Sundae"
    },
    {
        "url": "images/tomato_soup.jpg",
        "caption": "Tomato Soup"
    },
    {
        "url": "images/mushroom_soup.jpg",
        "caption": "Mushroom Soup"
    },
    {
        "url": "images/salad.jpg",
        "caption": "Salad"
    },
    {
        "url": "images/coleslaw.jpg",
        "caption": "Coleslaw"
    },
    {
        "url": "images/nugget.jpg",
        "caption": "Nugget"
    },
    {
        "url": "images/french_fries.jpg",
        "caption": "French fries"
    },
    {
        "url": "images/baked_potato.jpg",
        "caption": "Baked Potato"
    },
    {
        "url": "images/water.jpg",
        "caption": "Fresh Water"
    },
    {
        "url": "images/coke.jpg",
        "caption": "Coke"
    },
    {
        "url": "images/orange.jpg",
        "caption": "Orange Juice"
    }
]
};
$.each(data.items, function (i, f) {
    $("ul").append("<li><img src='" + f.url + "' / > Caption: " + f.caption + " </li>");
});