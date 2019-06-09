const datasLegumes = [
  {
    id: 0,
    name: 'Petit panier',
    price: '20',
    unite: 'unité',
    slug: 'petit'
  },
  {
    id: 1,
    name: 'Panier moyen',
    price: '25',
    unite: 'unité',
    slug: 'moyen'
  },
  {
    id: 2,
    name: 'Grand panier',
    price: '35',
    unite: 'unité',
    slug: 'grand'
  },
  {
    id: 3,
    name: 'Brocoli',
    season: 'hiver',
    price: '6.00',
    unite: 'kg',
    slug: 'brocoli',
    visible: false
  },
  {
    id: 4,
    name: 'Carottes',
    season: 'été',
    price: '3.50',
    unite: 'en vrac',
    slug: 'carottes',
    visible: false
  },
  {
    id: 5,
    name: 'Salsifis',
    season: 'hiver',
    price: '5.00',
    unite: 'kg',
    slug: 'salsifis',
    visible: false
  },
  {
    id: 6,
    name: 'Persil frisé',
    season: 'été',
    price: '0.50',
    unite: 'botte',
    slug: 'persilFrise',
    visible: true
  },
  {
    id: 7,
    name: 'Poireaux',
    season: 'hiver',
    price: '3.80',
    unite: 'kg',
    slug: 'poireaux',
    visible: true
  },
  {
    id: 8,
    name: 'Salade de blé',
    season: 'hiver',
    price: '4.50',
    unite: '200g',
    slug: 'saladeDeBle',
    visible: false
  },
  {
    id: 9,
    name: 'Radis',
    season: 'été',
    price: '1.20',
    unite: 'botte',
    slug: 'radis',
    visible: true
  },
  {
    id: 10,
    name: 'Pomme de terre',
    season: 'hiver',
    price: '2.50',
    unite: 'kg',
    slug: 'pommeDeTerre',
    visible: true
  },
  {
    id: 11,
    name: 'Ails',
    season: 'été',
    price: '1.50',
    unite: 'gousse',
    slug: 'ails',
    visible: true
  },
  {
    id: 12,
    name: 'Épinards',
    season: 'hiver',
    price: '6.50',
    unite: 'kg',
    slug: 'epinards',
    visible: true
  },
  {
    id: 13,
    name: 'Oignons blancs',
    season: 'hiver',
    price: '1.50',
    unite: 'kg',
    slug: 'oignonsBlancs',
    visible: true
  },
  {
    id: 14,
    name: 'Oignons rouges',
    season: 'hiver',
    price: '1.50',
    unite: 'kg',
    slug: 'oignonsRouges',
    visible: true
  },
  {
    id: 15,
    name: 'Jeunes oignons',
    season: 'hiver',
    price: '2.00',
    unite: 'botte',
    slug: 'jeunesOignons',
    visible: true
  },
  {
    id: 16,
    name: 'Panais',
    season: 'hiver',
    price: '4.60',
    unite: 'kg',
    slug: 'panais',
    visible: false
  },
  {
    id: 17,
    name: 'Aubergines',
    season: 'été',
    price: '3.50',
    unite: 'kg',
    slug: 'aubergines',
    visible: false
  },
  {
    id: 18,
    name: 'Choux-fleurs',
    season: 'été',
    price: '2.50',
    unite: 'pièce',
    slug: 'chouxFleurs',
    visible: false
  },
  {
    id: 19,
    name: 'Concombres',
    season: 'été',
    price: '1.10',
    unite: 'pièce',
    slug: 'concombres',
    visible: false
  },
  {
    id: 20,
    name: 'Courgettes',
    season: 'été',
    price: '2.00',
    unite: 'kg',
    slug: 'courgettes',
    visible: false
  },
  {
    id: 21,
    name: 'Haricots',
    season: 'été',
    price: '4.00',
    unite: 'kg',
    slug: 'haricots',
    visible: false
  },
  {
    id: 22,
    name: 'Poivrons',
    season: 'été',
    price: '2.10',
    unite: 'kg',
    slug: 'poivrons',
    visible: false
  },
  {
    id: 23,
    name: 'Cresson',
    season: 'hiver',
    price: '2.50',
    unite: 'botte',
    slug: 'cresson',
    visible: false
  },
  {
    id: 24,
    name: 'Tomates en grappe',
    season: 'été',
    price: '4.50',
    unite: 'kg',
    slug: 'tomatesEnGrappe',
    visible: false
  },
  {
    id: 25,
    name: 'Tomates rondes',
    season: 'été',
    price: '4.50',
    unite: 'kg',
    slug: 'tomatesRondes',
    visible: false
  },
  {
    id: 26,
    name: 'Coeur de boeuf',
    season: 'été',
    price: '4.50',
    unite: 'kg',
    slug: 'coeurDeBoeuf',
    visible: false
  },
  {
    id: 27,
    name: 'Noires de Crimée',
    season: 'été',
    price: '4.50',
    unite: 'kg',
    slug: 'noiresDeCrimee',
    visible: false
  },
  {
    id: 28,
    name: 'Cornu des Andes',
    season: 'été',
    price: '4.50',
    unite: 'kg',
    slug: 'cornuDesAndes',
    visible: false
  },
  {
    id: 29,
    name: 'Tomates cerises',
    season: 'été',
    price: '4.50',
    unite: 'kg',
    slug: 'tomatesCerises',
    visible: false
  },
  {
    id: 30,
    name: 'Tomates yellow',
    season: 'été',
    price: '4.50',
    unite: 'kg',
    slug: 'tomatesYellow',
    visible: false
  },
  {
    id: 31,
    name: 'Ails',
    season: 'hiver',
    price: '1.20',
    unite: 'pièce',
    slug: 'ails',
    visible: false
  },
  {
    id: 32,
    name: 'Carottes',
    season: 'hiver',
    price: '2.50',
    unite: 'kg',
    slug: 'carottes',
    visible: false
  },
  {
    id: 33,
    name: 'Échalotes',
    season: 'hiver',
    price: '5.70',
    unite: 'kg',
    slug: 'echalotes',
    visible: true
  },
  {
    id: 34,
    name: 'Champignons blonds',
    season: 'hiver',
    price: '3.00',
    unite: '250g',
    slug: 'champignonsBlonds',
    visible: false
  },
  {
    id: 35,
    name: 'Champignons blancs',
    season: 'hiver',
    price: '3.50',
    unite: '500gr',
    slug: 'champignonsBlancs',
    visible: false
  },
  {
    id: 36,
    name: 'Choux blancs',
    season: 'hiver',
    price: '3.00',
    unite: 'pièce',
    slug: 'chouxBlancs',
    visible: false
  },
  {
    id: 37,
    name: 'Choux verts',
    season: 'hiver',
    price: '3.00',
    unite: 'pièce',
    slug: 'chouxVerts',
    visible: false
  },

  {
    id: 38,
    name: 'Choux rouges',
    season: 'hiver',
    price: '3.00',
    unite: 'pièce',
    slug: 'chouxRouges',
    visible: false
  },
  {
    id: 39,
    name: 'Laitue',
    season: 'été',
    price: '2.00',
    unite: 'pièce',
    slug: 'laitue',
    visible: false
  },
  {
    id: 40,
    name: 'Feuille de chêne verte',
    season: 'été',
    price: '2.00',
    unite: 'pièce',
    slug: 'feuilleDeCheneVerte',
    visible: false
  },
  {
    id: 41,
    name: 'Feuille de chêne rouge',
    season: 'été',
    price: '2.00',
    unite: 'pièce',
    slug: 'feuilleDeCheneRouge',
    visible: false
  },
  {
    id: 42,
    name: 'Salade 4 saisons',
    season: 'été',
    price: '2.00',
    unite: 'pièce',
    slug: 'salade4Saisons',
    visible: false
  },
  {
    id: 43,
    name: 'Bettes',
    season: 'été',
    price: '3.50',
    unite: 'kg',
    slug: 'bettes',
    visible: true
  },
  {
    id: 44,
    name: 'Céleri blanc',
    season: 'été',
    price: '2.70',
    unite: 'pièce',
    slug: 'celeriBlanc',
    visible: true
  },
  {
    id: 45,
    name: 'Céleri vert',
    season: 'été',
    price: '2.70',
    unite: 'pièce',
    slug: 'celeriVert',
    visible: true
  },
  {
    id: 46,
    name: 'Oeufs',
    season: 'été',
    price: '0.40',
    unite: 'pièce',
    slug: 'oeufs',
    visible: true
  },
  {
    id: 47,
    name: 'Fraises gariguettes',
    season: 'été',
    price: '6.50',
    unite: '500gr',
    slug: 'fraisesGariguettes',
    visible: true
  },
  {
    id: 48,
    name: 'Artichauts',
    season: 'été',
    price: '4.00',
    unite: 'kg',
    slug: 'artichauts',
    visible: true
  }
];

const legumes = angular.module('legumes', ['ngSanitize']);
legumes.controller('DatasCtrl', function($scope) {
  // $scope.datas = datas;
  let filteredDatas = [];
  const reqDatas = datasLegumes;
  for (const key in reqDatas) {
    // if (key > 2 && reqDatas[key].visible == true && reqDatas[key].season == "hiver") { // A modifier si le nombre de paniers change
    if (key > 2 && reqDatas[key].visible == true) {
      // A modifier si le nombre de paniers change
      filteredDatas.push(reqDatas[key]);
    }
  }
  $scope.datas = filteredDatas;
});

const datasPartenaires = [
  {
    id: 0,
    name: 'Évasion',
    image: 'logo_evasion.png',
    lien: 'http://www.evasionasbl.be/'
  },
  {
    id: 1,
    name: 'Mons',
    image: 'logo_mons.png',
    lien: 'http://www.mons.be/'
  },
  {
    id: 2,
    name: 'Mosaïc',
    image: 'logo_mosaic.png',
    lien: 'https://www.facebook.com/mosaicmons/'
  },
  {
    id: 3,
    name: 'Allcook',
    image: 'logo_allcook.png',
    lien: 'https://www.allcook.be/'
  },
  {
    id: 4,
    name: 'CISP',
    image: 'logo_cisp.png',
    lien: 'https://emploi.wallonie.be/home/formation/cisp.html'
  },
  {
    id: 5,
    name: 'AID',
    image: 'logo_aid.png',
    lien: 'http://www.aid-hainautcentre.be/'
  },
  {
    id: 6,
    name: "Le gout d'apprendre",
    image: 'logo_legoutdapprendre.png',
    lien: 'http://www.legoutdapprendre.be/'
  }
];

const partenaires = angular.module('partenaires', ['ngSanitize']);
partenaires.controller('DatasCtrl', function($scope) {
  $scope.datas = datasPartenaires;
});
