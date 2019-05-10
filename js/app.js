const datasLegumes = [
    {
        "id": 0,
        "name": "Petit panier",
        "price": "20",
        "unite": "unité",
        "slug":"petit"
    },
    {
        "id": 1,
        "name": "Panier moyen",
        "price": "25",
        "unite": "unité",
        "slug":"moyen"
    },
    {
        "id": 2,
        "name": "Grand panier",
        "price": "35",
        "unite": "unité",
        "slug":"grand"
    },
    {
        "id": 3,
        "name": "Brocoli",
        "season": "hiver",
        "price": "6.00",
        "unite": "kg",
        "slug":"brocoli",
        "visible":true
    },
    {
        "id": 4,
        "name": "Carottes",
        "season": "été",
        "price": "3.50",
        "unite": "botte",
        "slug":"carottes",
        "visible":true
    },
    {
        "id": 5,
        "name": "Salsifis",
        "season": "hiver",
        "price": "5.00",
        "unite": "kg",
        "slug":"salsifis",
        "visible":true
    },
    {
        "id": 6,
        "name": "Persil",
        "season": "été",
        "price": "0.50",
        "unite": "botte",
        "slug":"persil",
        "visible":true
    },
    {
        "id": 7,
        "name": "Poireaux",
        "season": "hiver",
        "price": "3.80",
        "unite": "kg",
        "slug":"poireaux",
        "visible":true
    },
    {
        "id": 8,
        "name": "Salade de blé",
        "season": "hiver",
        "price": "4.50",
        "unite": "200g",
        "slug":"saladeDeBle",
        "visible":true
    },
    {
        "id": 9,
        "name": "Radis",
        "season": "été",
        "price": "1.20",
        "unite": "botte",
        "slug":"radis",
        "visible":true
    },
    {
        "id": 10,
        "name": "Pomme de terre",
        "season": "hiver",
        "price": "2.50",
        "unite": "kg",
        "slug":"pommeDeTerre",
        "visible":true
    },
    {
        "id": 11,
        "name": "Ails",
        "season": "été",
        "price": "1.50",
        "unite": "gousse",
        "slug":"ails",
        "visible":true
    },
    {
        "id": 12,
        "name": "Épinards",
        "season": "hiver",
        "price": "6.50",
        "unite": "kg",
        "slug":"epinards",
        "visible":true
    },
    {
        "id": 13,
        "name": "Oignons",
        "season": "hiver",
        "price": "2.00",
        "unite": "kg",
        "slug":"oignons",
        "visible":true
    },
    {
        "id": 14,
        "name": "Panais",
        "season": "hiver",
        "price": "4.60",
        "unite": "kg",
        "slug":"panais",
        "visible":true
    },
    {
        "id": 15,
        "name": "Aubergines",
        "season": "été",
        "price": "3.50",
        "unite": "kg",
        "slug":"aubergines",
        "visible":true
    },
    {
        "id": 16,
        "name": "Choux-fleurs",
        "season": "été",
        "price": "2.50",
        "unite": "pièce",
        "slug":"chouxFleurs",
        "visible":true
    },
    {
        "id": 17,
        "name": "Concombres",
        "season": "été",
        "price": "1.10",
        "unite": "pièce",
        "slug":"concombres",
        "visible":true
    },
    {
        "id": 18,
        "name": "Courgettes",
        "season": "été",
        "price": "2.00",
        "unite": "kg",
        "slug":"courgettes",
        "visible":true
    },
    {
        "id": 19,
        "name": "Haricots",
        "season": "été",
        "price": "4.00",
        "unite": "kg",
        "slug":"haricots",
        "visible":true
    },
    {
        "id": 20,
        "name": "Poivrons",
        "season": "été",
        "price": "2.10",
        "unite": "kg",
        "slug":"poivrons",
        "visible":true
    },
    {
        "id": 21,
        "name": "Cresson",
        "season": "hiver",
        "price": "2.50",
        "unite": "botte",
        "slug":"cresson",
        "visible":true
    },
    {
        "id": 22,
        "name": "Tomates en grappe",
        "season": "été",
        "price": "4.50",
        "unite": "kg",
        "slug":"tomatesEnGrappe",
        "visible":true
    },
    {
        "id": 23,
        "name": "Tomates rondes",
        "season": "été",
        "price": "4.50",
        "unite": "kg",
        "slug":"tomatesRondes",
        "visible":true
    },
    {
        "id": 24,
        "name": "Coeur de boeuf",
        "season": "été",
        "price": "4.50",
        "unite": "kg",
        "slug":"coeurDeBoeuf",
        "visible":true
    },
    {
        "id": 25,
        "name": "Noires de Crimée",
        "season": "été",
        "price": "4.50",
        "unite": "kg",
        "slug":"noiresDeCrimee",
        "visible":true
    },
    {
        "id": 26,
        "name": "Cornu des Andes",
        "season": "été",
        "price": "4.50",
        "unite": "kg",
        "slug":"cornuDesAndes",
        "visible":true
    },
    {
        "id": 27,
        "name": "Tomates cerises",
        "season": "été",
        "price": "4.50",
        "unite": "kg",
        "slug":"tomatesCerises",
        "visible":true
    },
    {
        "id": 28,
        "name": "Tomates yellow",
        "season": "été",
        "price": "4.50",
        "unite": "kg",
        "slug":"tomatesYellow",
        "visible":true
    },
    {
        "id": 29,
        "name": "Ails",
        "season": "hiver",
        "price": "1.20",
        "unite": "pièce",
        "slug":"ails",
        "visible":true
    },
    {
        "id": 30,
        "name": "Carottes",
        "season": "hiver",
        "price": "2.50",
        "unite": "kg",
        "slug":"carottes",
        "visible":true
    },
    {
        "id": 31,
        "name": "Échalotes",
        "season": "hiver",
        "price": "5.70",
        "unite": "kg",
        "slug":"echalotes",
        "visible":true
    },
    {
        "id": 32,
        "name": "Champignons blonds",
        "season": "hiver",
        "price": "3.00",
        "unite": "250g",
        "slug":"champignonsBlonds",
        "visible":true
    },
    {
        "id": 33,
        "name": "Champignons blancs",
        "season": "hiver",
        "price": "3.50",
        "unite": "500gr",
        "slug":"champignonsBlancs",
        "visible":true
    },
    {
        "id": 34,
        "name": "Choux blancs",
        "season": "hiver",
        "price": "3.00",
        "unite": "pièce",
        "slug":"chouxBlancs",
        "visible":true
    },
    {
        "id": 35,
        "name": "Choux verts",
        "season": "hiver",
        "price": "3.00",
        "unite": "pièce",
        "slug":"chouxVerts",
        "visible":true
    },
    
    {
        "id": 36,
        "name": "Choux rouges",
        "season": "hiver",
        "price": "3.00",
        "unite": "pièce",
        "slug":"chouxRouges",
        "visible":true
    },
    {
        "id": 37,
        "name": "Laitue",
        "season": "été",
        "price": "0.95", // 0.95 - 1.50
        "unite": "pièce",
        "slug":"laitue",
        "visible":true
    },{
        "id": 38,
        "name": "Feuilles de chêne",
        "season": "été",
        "price": "0.95", // 0.95 - 1.50
        "unite": "pièce",
        "slug":"feuillesDeChene",
        "visible":true
    },{
        "id": 39,
        "name": "Salade verte",
        "season": "été",
        "price": "0.95", // 0.95 - 1.50
        "unite": "pièce",
        "slug":"saladeVerte",
        "visible":true
    },{
        "id": 40,
        "name": "Salade rouge",
        "season": "été",
        "price": "0.95", // 0.95 - 1.50
        "unite": "pièce",
        "slug":"saladeRouge",
        "visible":true
    },{
        "id": 41,
        "name": "Salade 4 saisons",
        "season": "été",
        "price": "0.95", // 0.95 - 1.50
        "unite": "pièce",
        "slug":"salade4Saisons",
        "visible":true
    },
    
    
    
    

];

const legumes = angular.module('legumes', ['ngSanitize']);
legumes.controller('DatasCtrl', function ($scope) {
    // $scope.datas = datas;
    let filteredDatas = [];
    const reqDatas = datasLegumes;
    for (const key in reqDatas) {
        // if (key > 2 && reqDatas[key].visible == true && reqDatas[key].season == "hiver") { // A modifier si le nombre de paniers change
        if (key > 2 && reqDatas[key].visible == true) { // A modifier si le nombre de paniers change
            filteredDatas.push(reqDatas[key]);
        }
    }
    $scope.datas = filteredDatas;
});


const datasPartenaires = [
    {
        "id": 0,
        "name": "Évasion",
        "image": "logo_evasion.png",
        "lien": "http://www.evasionasbl.be/"
    },
    {
        "id": 1,
        "name": "Mons",
        "image": "logo_mons.png",
        "lien": "http://www.mons.be/"
    },
    {
        "id": 2,
        "name": "Mosaïc",
        "image": "logo_mosaic.png",
        "lien": "https://www.facebook.com/mosaicmons/"
    },
    {
        "id": 3,
        "name": "Allcook",
        "image": "logo_allcook.png",
        "lien": "https://www.allcook.be/"
    },
    {
        "id": 4,
        "name": "CISP",
        "image": "logo_cisp.png",
        "lien": "https://emploi.wallonie.be/home/formation/cisp.html"
    },
    {
        "id": 5,
        "name": "AID",
        "image": "logo_aid.png",
        "lien": "http://www.aid-hainautcentre.be/"
    },
    {
        "id": 6,
        "name": "Le gout d'apprendre",
        "image": "logo_legoutdapprendre.png",
        "lien": "http://www.legoutdapprendre.be/"
    }

];

const partenaires = angular.module('partenaires', ['ngSanitize']);
partenaires.controller('DatasCtrl', function ($scope) {
    $scope.datas = datasPartenaires;
});