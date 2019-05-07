import face_recognition

image = face_recognition.load_image_file('./img/team2.jpg')
face_locations = face_recognition.face_locations(image)


# arrray of coords of ech face
# print(face_locations)

print(f'There are {len(face_locations)} people in this image')
