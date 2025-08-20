def crear_qr(datos):
  """Crea un código QR a partir de los datos proporcionados.

  Args:
    datos: Los datos que se van a codificar en el código QR.

  Returns:
    Un objeto de imagen que representa el código QR.
  """

  # Importa la biblioteca necesaria para generar códigos QR.
  import qrcode

  # Crea un objeto QRCode.
  qr = qrcode.QRCode(
      version=1,
      box_size=10,
      border=5,
  )

  # Agrega los datos al objeto QRCode.
  qr.add_data(datos)
  qr.make(fit=True)

  # Crea una imagen del código QR.
  img = qr.make_image(fill_color="black", back_color="white")

  # Devuelve la imagen.
  return img

def leer_qr(imagen):
  """Lee un código QR de una imagen.

  Args:
    imagen: Un objeto de imagen que representa el código QR.

  Returns:
    Los datos codificados en el código QR.
  """

  # Importa la biblioteca necesaria para leer códigos QR.
  import qrcode

  # Crea un objeto QRCodeReader.
  qr_reader = qrcode.QRCodeReader()

  # Lee los datos de la imagen.
  datos = qr_reader.decode(imagen)

  # Devuelve los datos.
  return datos

def aplicacion_del_qr():
  """Aplicación de código QR."""

  # Pide al usuario que introduzca los datos que se van a codificar.
  datos = input("Introduce los datos que se van a codificar: ")

  # Crea un código QR a partir de los datos.
  img = crear_qr(datos)

  # Muestra el código QR al usuario.
  img.show()

  # Pide al usuario que introduzca el camino de la imagen del código QR.
  camino_imagen = input("Introduce el camino de la imagen del código QR: ")

  # Lee el código QR de la imagen.
  datos = leer_qr(camino_imagen)

  # Muestra los datos al usuario.
  print("Los datos decodificados son:", datos)

# Llama a la función principal de la aplicación.
aplicacion_del_qr()