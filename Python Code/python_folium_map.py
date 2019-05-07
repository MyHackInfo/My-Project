import folium
map = folium.Map(location=[26.8940,75.7156],tiles='Stamen Toner',zoom_start=13)
#map = folium.Map(location=[26.8940,75.7156],tiles='Mapbox Control Room',zoom_start=13)
#map = folium.Map(location=[26.8940,75.7156],tiles='http://{s}.tiles.mapbox.com/v3/mapbox.control-room/{z}/{x}/{y}.png',attr='Mapbox attribution',zoom_start=5)
#map = folium.Map(location=[26.8940,75.7156],tiles='OpenStreetMap',zoom_start=13)
#map.save("Map1.html")

# Add Marker on map
#map.add_child(folium.Marker(location=[26.9706,75.3791],popup="hi I am a Marker",icon=folium.Icon(color='red')))
#map.add_child(folium.Marker(location=[26.9706,75.3791],popup="hi I am a Marker",icon=folium.Icon(color='glass')))
#map.save("Map2_marker.html")

# Add FeatureGroup
fg = folium.FeatureGroup(name='My Map')

fg.add_child(folium.Marker(location=[26.9706,75.3791],popup="hi I am a Marker",icon=folium.Icon(color='red')))
fg.add_child(folium.Marker(location=[26.9706,71.3791],popup="hi I am a Marker",icon=folium.Icon(color='green')))
fg.add_child(folium.Marker(location=[26.9706,73.3791],popup="hi I am a Marker",icon=folium.Icon(color='lightblue')))

map.add_child(fg)
map.save("Map3_feature_group.html")
