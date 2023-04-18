let map;

var enterance = "../Images/door.png"
var car = "../Images/car.jpg"
//kk
const KKBuilding = { lat: 47.085661211826306, lng: 17.909818088728127 };
const KKEnterance = { lat: 47.08577263491504, lng: 17.9093277029896 };
const KKVCar = { lat: 47.0858504184038, lng: 17.908935327482457 };
//magiszter
const magiBuilding = { lat: 47.08594148536639, lng: 17.900227050588057 };
const magiCar1 = { lat: 47.08628474240626, lng: 17.90001378312458 };
const magiCar2 = { lat: 47.08592603653785, lng: 17.899747277963428 };
const magiEnterance1 = { lat: 47.08564329020976, lng: 17.90040424417464 };
const magiEnterance2 = { lat: 47.08571925205727, lng: 17.90055918903578 };
//i épület
const IBuilding = { lat: 47.089425516975815, lng: 17.908035356636066 };
const IEnterance = { lat: 47.089525957782875, lng: 17.907683987250866 };

//A epulet
const ABuilding = { lat: 47.08865232143145, lng: 17.90833261002047 };
const AEnterance = { lat: 47.088626973614616, lng: 17.90813612477883 };

//B epulet
const BBuilding = { lat: 47.08801627902013, lng: 17.90836994952027 };
const BEnterance1 = { lat: 47.08811471537567, lng: 17.908208268462744 };
const BEnterance2 = { lat: 47.08774723905934, lng: 17.908205286630025 };

//N epulet
const NBuilding = { lat: 47.08609668858292, lng: 17.902774993918847 };
const NEnterance = { lat: 47.08636385585708, lng: 17.902916547111698 };

//M epulet
const MBuilding = { lat: 47.086690864202545, lng: 17.901064718467804 };
const MEnterance = { lat: 47.08669973149981, lng: 17.901228437180936 };

//Poli
const PoliBuilding = { lat: 47.085242345383726, lng: 17.902861923036777 };
const PoliEnterance = { lat: 47.08529509707526, lng: 17.902728670456202 };

//Könyvtár
const LibraryBuilding = { lat: 47.08628152669935, lng: 17.901512975418633 };
const LibraryEnterance = { lat: 47.08638793498688, lng: 17.901624601813953 };

var map1, map1, map2, map3, map4, map5, map6, map7, map8, map9;

async function initMap() {
  //központi kollégium-------------------------------------------------------------------
  var mapOption1 = {
    center: KKBuilding,
    zoom: 18,
    mapId: "7a17f3fb28447a5e",
    draggable: true,
  }
  map1 = new google.maps.Map(document.getElementById("map1"), mapOption1);

  const kk = new google.maps.Marker({
    position: KKBuilding,
    map: map1,
    animation: google.maps.Animation.DROP
  });

  const kkenterance = new google.maps.Marker({
    position: KKEnterance,
    title: "Központi Kollégium Épület bejárat",
    label: {
      text: "Központi Kollégium Épület bejárat",
      className: 'marker-label',
    },
    map: map1,
    icon: {
      url: enterance,
      scaledSize: new google.maps.Size(35, 35)
    },
    animation: google.maps.Animation.DROP
  });

  const kkparking = new google.maps.Marker({
    position: KKVCar,
    title: "Központi Kollégium Parkoló bejárat",
    label: {
      text: "Központi Kollégium Parkoló bejárat",
      className: 'marker-label',
    },
    map: map1,
    icon: {
      url: car,
      scaledSize: new google.maps.Size(35, 35)
    },
    animation: google.maps.Animation.DROP
  });

  //Hotel Magister----------------------------------------------------------------------
  var mapOption2 = {
    center: magiBuilding,
    zoom: 18,
    mapId: "7a17f3fb28447a5e",
    draggable: true,
  }
  map2 = new google.maps.Map(document.getElementById("map2"), mapOption2);

  const magi = new google.maps.Marker({
    position: magiBuilding,
    map: map2,
    animation: google.maps.Animation.DROP
  });

  const magienterance1 = new google.maps.Marker({
    position: magiEnterance1,
    title: "Hotel Magister Épület bejárat",
    label: {
      text: "Hotel Magister Épület bejárat",
      className: 'marker-label',
    },
    map: map2,
    icon: {
      url: enterance,
      scaledSize: new google.maps.Size(35, 35)
    },
    animation: google.maps.Animation.DROP
  });
  const magienterance2 = new google.maps.Marker({
    position: magiEnterance2,
    title: "Hotel Magister Épület bejárat",
    label: {
      text: "Hotel Magister Épület bejárat",
      className: 'marker-label',
    },
    map: map2,
    icon: {
      url: enterance,
      scaledSize: new google.maps.Size(35, 35)
    },
    animation: google.maps.Animation.DROP
  });

  const magiparking1 = new google.maps.Marker({
    position: magiCar1,
    title: "Hotel Magister Parkoló bejárat",
    label: {
      text: "Hotel Magister Parkoló bejárat",
      className: 'marker-label',
    },
    map: map2,
    icon: {
      url: car,
      scaledSize: new google.maps.Size(35, 35)
    },
    animation: google.maps.Animation.DROP
  });
  const magiparking2 = new google.maps.Marker({
    position: magiCar2,
    title: "Hotel Magister Parkoló bejárat",
    label: {
      text: "Hotel Magister Parkoló bejárat",
      className: 'marker-label',
    },
    map: map2,
    icon: {
      url: car,
      scaledSize: new google.maps.Size(35, 35)
    },
    animation: google.maps.Animation.DROP
  });

  //I épület ------------------------------------------------------------------------------
  var mapOption3 = {
    center: IBuilding,
    zoom: 18,
    mapId: "7a17f3fb28447a5e",
    draggable: true,
  }
  map3 = new google.maps.Map(document.getElementById("map3"), mapOption3);

  const iBuilding = new google.maps.Marker({
    position: IBuilding,
    map: map3,
    animation: google.maps.Animation.DROP
  });

  const iEnterance = new google.maps.Marker({
    position: IEnterance,
    title: "I Épület bejárat",
    label: {
      text: "I Épület bejárat",
      className: 'marker-label',
    },
    map: map3,
    icon: {
      url: enterance,
      scaledSize: new google.maps.Size(35, 35)
    },
    animation: google.maps.Animation.DROP
  });

  //A épület---------------------------------------------------------------------------------
  var mapOption4 = {
    center: ABuilding,
    zoom: 18,
    mapId: "7a17f3fb28447a5e",
    draggable: true,
  }
  map4 = new google.maps.Map(document.getElementById("map4"), mapOption4);

  const aBulding = new google.maps.Marker({
    position: ABuilding,
    map: map4,
    animation: google.maps.Animation.DROP
  });

  const aEnterance = new google.maps.Marker({
    position: AEnterance,
    title: "A Épület bejárat",
    label: {
      text: "A Épület bejárat",
      className: 'marker-label',
    },
    map: map4,
    icon: {
      url: enterance,
      scaledSize: new google.maps.Size(35, 35)
    },
    animation: google.maps.Animation.DROP
  });

  //B épület--------------------------------------------------------------------------------------
  var mapOption5 = {
    center: BBuilding,
    zoom: 18,
    mapId: "7a17f3fb28447a5e",
    draggable: true,
  }
  map5 = new google.maps.Map(document.getElementById("map5"), mapOption5);

  const bBuilding = new google.maps.Marker({
    position: BBuilding,
    map: map5,
    animation: google.maps.Animation.DROP
  });

  const bEnterance1 = new google.maps.Marker({
    position: BEnterance1,
    title: "B Épület bejárat",
    label: {
      text: "B Épület bejárat",
      className: 'marker-label',
    },
    map: map5,
    icon: {
      url: enterance,
      scaledSize: new google.maps.Size(35, 35)
    },
    animation: google.maps.Animation.DROP
  });

  const bEnterance2 = new google.maps.Marker({
    position: BEnterance2,
    title: "B Épület bejárat",
    label: {
      text: "B Épület bejárat",
      className: 'marker-label',
    },
    map: map5,
    icon: {
      url: enterance,
      scaledSize: new google.maps.Size(35, 35)
    },
    animation: google.maps.Animation.DROP
  });

  //N épület------------------------------------------------------------------------------------------
  var mapOption6 = {
    center: NBuilding,
    zoom: 18,
    mapId: "7a17f3fb28447a5e",
    draggable: true,
  }
  map6 = new google.maps.Map(document.getElementById("map6"), mapOption6);

  const nBuildng = new google.maps.Marker({
    position: NBuilding,
    map: map6,
    animation: google.maps.Animation.DROP
  });

  const nEnterance = new google.maps.Marker({
    position: NEnterance,
    title: "N Épület bejárat",
    label: {
      text: "N Épület bejárat",
      className: 'marker-label',
    },
    map: map6,
    icon: {
      url: enterance,
      scaledSize: new google.maps.Size(35, 35)
    },
    animation: google.maps.Animation.DROP
  });

  //M épület---------------------------------------------------------------------------------------
  var mapOption7 = {
    center: MBuilding,
    zoom: 18,
    mapId: "7a17f3fb28447a5e",
    draggable: true,
  }
  map7 = new google.maps.Map(document.getElementById("map7"), mapOption7);

  const mBuilding = new google.maps.Marker({
    position: MBuilding,
    map: map7,
    animation: google.maps.Animation.DROP
  });

  const mEnterance = new google.maps.Marker({
    position: MEnterance,
    title: "M Épület bejárat",
    label: {
      text: "M Épület bejárat",
      className: 'marker-label',
    },
    map: map7,
    icon: {
      url: enterance,
      scaledSize: new google.maps.Size(35, 35)
    },
    animation: google.maps.Animation.DROP
  });

  //polinszki--------------------------------------------------------------------------------------
  var mapOption8 = {
    center: PoliBuilding,
    zoom: 18,
    mapId: "7a17f3fb28447a5e",
    draggable: true,
  }
  map8 = new google.maps.Map(document.getElementById("map8"), mapOption8);

  const poliBuilding = new google.maps.Marker({
    position: PoliBuilding,
    map: map8,
    animation: google.maps.Animation.DROP
  });

  const poliEnterance = new google.maps.Marker({
    position: PoliEnterance,
    title: "Polinszky-terem Épület bejárat",
    label: {
      text: "Polinszky Kollégium Épület bejárat",
      className: 'marker-label',
    },
    map: map8,
    icon: {
      url: enterance,
      scaledSize: new google.maps.Size(35, 35)
    },
    animation: google.maps.Animation.DROP
  });

  //könyvtár -----------------------------
  var mapOption9 = {
    center: LibraryBuilding,
    zoom: 18,
    mapId: "7a17f3fb28447a5e",
    draggable: true,
  }
  map9 = new google.maps.Map(document.getElementById("map9"), mapOption9);

  const libraryBuilding = new google.maps.Marker({
    position: LibraryBuilding,
    map: map9,
    animation: google.maps.Animation.DROP
  });

  const libraryEnterance = new google.maps.Marker({
    position: LibraryEnterance,
    title: "Könyvtár Épület bejárat",
    label: {
      text: "Könyvtár Épület bejárat",
      className: 'marker-label',
    },
    map: map9,
    icon: {
      url: enterance,
      scaledSize: new google.maps.Size(35, 35)
    },
    animation: google.maps.Animation.DROP
  });

  //MARKERS for the palces-------------------------------------------------------------------

  var mapOption10 = {
    center: bBuilding,
    zoom: 14,
    mapId: "7a17f3fb28447a5e",
    draggable: true,
  }
  map10 = new google.maps.Map(document.getElementById("map10"), mapOption10);

  const minerv  = new google.maps.Marker({
    position: bBuilding,
    map: map10,
    animation: google.maps.Animation.DROP
  });



}


