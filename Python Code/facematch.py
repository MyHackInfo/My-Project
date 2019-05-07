import face_recognition

image_of_bill = face_recognition.load_image_file('./img/know/bill gates.jpg')
bill_face_encoding = face_recognition.face_encodings(image_of_bill)[0]

unknown = face_recognition.load_image_file('./img/unknow/trump.jpg')
unknown_face_encoding = face_recognition.face_encodings(unknown)[0]

# Campare faces
results = face_recognition.compare_faces([bill_face_encoding],unknown_face_encoding)

if results[0]:
    print('This is Bill Gates')
else:
    print('This is Not Bill Gates')
