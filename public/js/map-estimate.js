mapboxgl.accessToken =
    "pk.eyJ1IjoiaWxoYW1iYXloYXFpIiwiYSI6ImNrdml6MTdnaWNveGIzMW56cTkxeXoxMm8ifQ.m2jcKpjbYBcBdSidMRz0YA";
const map = new mapboxgl.Map({
    container: "map",
    style: "mapbox://styles/mapbox/streets-v11",
    center: [112.79754314113003, -7.279546984580927],
    zoom: 8,
});

const geocoder_asal = new MapboxGeocoder({
    accessToken: mapboxgl.accessToken, // Set the access token
    mapboxgl: mapboxgl, // Set the mapbox-gl instance
    marker: false, // Do not use the default marker style
    placeholder: 'Kota Asal',
    bbox: [95.00, -11.00, 141.00, 6.00],
});

const geocoder_tujuan = new MapboxGeocoder({
    accessToken: mapboxgl.accessToken, // Set the access token
    mapboxgl: mapboxgl, // Set the mapbox-gl instance
    marker: false, // Do not use the default marker style
    placeholder: 'Kota Tujuan',
    bbox: [95.00, -11.00, 141.00, 6.00],
});

var geoAsal = document.getElementById('kota-asal')
geoAsal.appendChild(geocoder_asal.onAdd(map));
geoAsal.childNodes[0].style.zIndex = "2";

var geoTujuan = document.getElementById('kota-tujuan')
geoTujuan.appendChild(geocoder_tujuan.onAdd(map));

map.on("load", () => {
    var marker_asal = new mapboxgl.Marker({
        anchor: 'center',
        draggable: true,
    })

    var marker_tujuan = new mapboxgl.Marker({
        anchor: 'center',
        draggable: true,
        color: 'red'
    })

    marker_tujuan.setLngLat([112.79754314113003, -7.279546984580927]).addTo(map);
    marker_asal.setLngLat([112.79754314113003, -7.279546984580927]).addTo(map);
     
    function onDragEndAsal() {
        const lngLat = marker_asal.getLngLat();
        coordinates.style.display = 'block';
        coordinates.innerHTML = `Longitude: ${lngLat.lng}<br />Latitude: ${lngLat.lat}`;
        var kota_asal = reverseGeocoder(marker_asal);
        kota_asal.then(response => geocoder_asal.setInput(response));
    }

    function onDragEndTujuan() {
        const lngLat = marker_tujuan.getLngLat();
        coordinates.style.display = 'block';
        coordinates.innerHTML = `Longitude: ${lngLat.lng}<br />Latitude: ${lngLat.lat}`;
        var kota_tujuan = reverseGeocoder(marker_tujuan);
        kota_tujuan.then(response => geocoder_tujuan.setInput(response));
    }
    
    marker_asal.on('dragend', onDragEndAsal);
    marker_tujuan.on('dragend', onDragEndTujuan);

    async function reverseGeocoder(marker){
        const lngLat = marker.getLngLat()
        var url = 'https://api.mapbox.com/geocoding/v5/mapbox.places/' + lngLat['lng'] + ','+ lngLat['lat'] +'.json?language=id&types=postcode&access_token=' + mapboxgl.accessToken ;

        var kota = await fetch(url);
        kota = await kota.json();
        kota = kota['features'][0]['place_name'];
        return kota
    }

    geocoder_asal.on('result', function(e) {
        marker_asal.setLngLat(e.result.center)
          .addTo(map);
        const lngLat = marker_asal.getLngLat();
        coordinates.style.display = 'block';
        coordinates.innerHTML = `Longitude: ${lngLat.lng}<br />Latitude: ${lngLat.lat}`;
        var kota_asal = reverseGeocoder(marker_asal);
        kota_asal.then(response => geocoder_asal.setInput(response));
      });

    geocoder_tujuan.on('result', function(e) {
        marker_tujuan.setLngLat(e.result.center)
          .addTo(map);
        const lngLat = marker_tujuan.getLngLat();
        coordinates.style.display = 'block';
        coordinates.innerHTML = `Longitude: ${lngLat.lng}<br />Latitude: ${lngLat.lat}`;
        var kota_tujuan = reverseGeocoder(marker_tujuan);
        kota_tujuan.then(response => geocoder_tujuan.setInput(response));
      });
});

list_provinsi = {"rajaongkir":{"query":[],"status":{"code":200,"description":"OK"},"results":[{"province_id":"1","province":"Bali"},{"province_id":"2","province":"Bangka Belitung"},{"province_id":"3","province":"Banten"},{"province_id":"4","province":"Bengkulu"},{"province_id":"5","province":"Yogyakarta"},{"province_id":"6","province":"Daerah Khusus Ibukota Jakarta"},{"province_id":"7","province":"Gorontalo"},{"province_id":"8","province":"Jambi"},{"province_id":"9","province":"Jawa Barat"},{"province_id":"10","province":"Jawa Tengah"},{"province_id":"11","province":"Jawa Timur"},{"province_id":"12","province":"Kalimantan Barat"},{"province_id":"13","province":"Kalimantan Selatan"},{"province_id":"14","province":"Kalimantan Tengah"},{"province_id":"15","province":"Kalimantan Timur"},{"province_id":"16","province":"Kalimantan Utara"},{"province_id":"17","province":"Kepulauan Riau"},{"province_id":"18","province":"Lampung"},{"province_id":"19","province":"Maluku"},{"province_id":"20","province":"Maluku Utara"},{"province_id":"21","province":"Aceh"},{"province_id":"22","province":"Nusa Tenggara Barat"},{"province_id":"23","province":"Nusa Tenggara Timur"},{"province_id":"24","province":"Papua"},{"province_id":"25","province":"Papua Barat"},{"province_id":"26","province":"Riau"},{"province_id":"27","province":"Sulawesi Barat"},{"province_id":"28","province":"Sulawesi Selatan"},{"province_id":"29","province":"Sulawesi Tengah"},{"province_id":"30","province":"Sulawesi Tenggara"},{"province_id":"31","province":"Sulawesi Utara"},{"province_id":"32","province":"Sumatera Barat"},{"province_id":"33","province":"Sumatera Selatan"},{"province_id":"34","province":"Sumatera Utara"}]}}['rajaongkir']['results']

function getIdProvinsi(provinsi){
    for(let i = 0; i < list_provinsi.length; i++){
        if(provinsi == list_provinsi[i]['province']){
            return list_provinsi[i]['province_id'];
        }
    }
}

async function getIdKota(prov_id, kota){
    const url = '/city/' + prov_id;
    var list_kota = await fetch(url);
    list_kota = await list_kota.json();
    list_kota = list_kota['rajaongkir']['results']
    // console.log(list_kota);

    var id_kota
    for(let i = 0; i < list_kota.length; i++){
        if(kota == list_kota[i]['city_name']){
            id_kota = list_kota[i]['city_id'];
        }
    }
    return id_kota;
}

var submitBtn = document.getElementById('submit');

submitBtn.onclick = function(){
    var kota_asal, provinsi_asal, kota_tujuan, provinsi_tujuan;
    [kota_asal, provinsi_asal] = geocoder_asal.inputString.split(', ').slice(1, 3);
    [kota_tujuan, provinsi_tujuan] = geocoder_tujuan.inputString.split(', ').slice(1, 3);
    var prov_id_a = getIdProvinsi(provinsi_asal);
    var prov_id_b = getIdProvinsi(provinsi_tujuan);
    
    async function getCost(weight){
        var kota_id_a, kota_id_b;
        await getIdKota(prov_id_a, kota_asal).then(response => kota_id_a = response);
        await getIdKota(prov_id_b, kota_tujuan).then(response => kota_id_b = response);
        
        var courier = ['jne', 'pos', 'tiki'];
        var image = ['']

        var tabel = document.getElementById('pengiriman');
        tabel.innerHTML = '';
        
        for (let i = 0; i < courier.length; i++){
            const url = '/cost/' + kota_id_a + '/' + kota_id_b + '/' + weight * 1000 + '/' + courier[i];
            console.log(url);
            var cost =  await fetch(url);
            var cost_detail;
            cost = await cost.json()
                .then(response => cost_detail = response);

            // console.log(cost_detail['rajaongkir']['results'][0]);
            cost_detail = cost_detail['rajaongkir']['results'][0];
            console.log(cost_detail);
            for(let j=0; j < cost_detail['costs'].length; j++){
                tabel.innerHTML += `
                <div class="tr">
                    <div class="td product-td">
                    <a href="#">
                        <div class="img ie-img">
                            <img src="img/` + courier[i] + `.jpg" alt="">
                        </div>
                        <h3 class="_title">`+ cost_detail['name'] +`</h3>
                        <div class="_cost">` + cost_detail['costs'][j]['description'] + `</div>
                    </a>
                    </div>
                    <div class="td quantity-td">` + cost_detail['costs'][j]['cost'][0]['etd'] + `</div>
                    <div class="td cost-td">Rp ` + cost_detail['costs'][j]['cost'][0]['value'] +`</div>
                </div>
                `;
            }
        }
    }

    var weightPackage = document.getElementById('weight');
    getCost(weightPackage.value);
};