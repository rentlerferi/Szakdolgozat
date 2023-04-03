let map;

var enterance = "../Images/door.png"
var car = "../Images/car.png"
//kk
const KKBuilding = { lat: 47.085661211826306, long: 17.909818088728127 };
const KKEnterance = { lat: 47.08577263491504, long: 17.9093277029896 };
const KKVCar = { lat: 47.0858504184038, long: 17.908935327482457 };
//magiszter
const magiBuilding = { lat: 47.08594148536639, long: 17.900227050588057 };
const magiCar1 = { lat: 47.08628474240626, long: 17.90001378312458 };
const magiCar2 = { lat: 47.08592603653785, long: 17.899747277963428 };
const magiEnterance1 = { lat: 47.08564329020976, long: 17.90040424417464 };
const magiEnterance2 = { lat: 47.08571925205727, long: 17.90055918903578 };
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


//kk
async function kkMap() {

  map = new google.maps.Map(document.getElementById("kkmap"), {
    center: KKBuilding,
    zoom: 18,
    mapId: "7a17f3fb28447a5e",

  });

  const marker = new google.maps.Marker({
    position: KKBuilding,
    map: map,
    animation: google.maps.Animation.DROP
  });

  const door = new google.maps.Marker({
    position: KKEnterance,
    title: "Központi Kollégium Épület bejárat",
    label: "Központi Kollégium Épület bejárat",
    map: map,
    icon: {
      url: enterance,
      scaledSize: new google.maps.Size(35, 35)
    },
    animation: google.maps.Animation.DROP
  });

    const parking = new google.maps.Marker({
      position: KKVCar,
      title: "Központi Kollégium Parkoló bejárat",
      label: "Központi Kollégium Parkoló bejárat",
      map: map,
      icon: {
        url: car,
        scaledSize: new google.maps.Size(35, 35)
      },
      animation: google.maps.Animation.DROP
  });
}

//magi
//i
async function initMap() {

  map = new google.maps.Map(document.getElementById("map"), {
    center: IBuilding,
    zoom: 18,
    mapId: "7a17f3fb28447a5e",

  });

  const marker = new google.maps.Marker({
    position: IBuilding,
    map: map,
    animation: google.maps.Animation.DROP
  });

  const door = new google.maps.Marker({
    position: IEnterance,
    title: "I Épület bejárat",
    label: "I Épület bejárat",
    map: map,
    icon: {
      url: enterance,
      scaledSize: new google.maps.Size(35, 35)
    },
    animation: google.maps.Animation.DROP
  });
}
