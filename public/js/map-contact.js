mapboxgl.accessToken = "pk.eyJ1IjoiaWxoYW1iYXloYXFpIiwiYSI6ImNrdml6MTdnaWNveGIzMW56cTkxeXoxMm8ifQ.m2jcKpjbYBcBdSidMRz0YA";

const map = new mapboxgl.Map({
    container: "map",
    style: "mapbox://styles/mapbox/outdoors-v11",
    center: [112.79754314113003, -7.279546984580927],
    zoom: 15,
});

map.on("load", () => {
    map.loadImage(
        "https://docs.mapbox.com/mapbox-gl-js/assets/custom_marker.png",
        (error, image) => {
            if (error) throw error;
            map.addImage("custom-marker", image);
            map.addSource("points", {
                type: "geojson",
                data: {
                    type: "FeatureCollection",
                    features: [
                        {
                            type: "Feature",
                            geometry: {
                                type: "Point",
                                coordinates: [
                                    112.79754314113003, -7.279546984580927
                                ],
                            },
                            properties: {
                                title: "Departemen Informatika - ITS",
                            },
                            
                        },
                    ],
                },
            });

            // Add a symbol layer
            map.addLayer({
                id: "points",
                type: "symbol",
                source: "points",
                layout: {
                    "icon-image": "custom-marker",
                    // get the title name from the source's "title" property
                    "text-field": ["get", "title"],
                    "text-font": [
                        "Open Sans Semibold",
                        "Arial Unicode MS Bold",
                    ],
                    "text-offset": [0, 1.25],
                    "text-anchor": "top",
                },
            });
        }
    );
});