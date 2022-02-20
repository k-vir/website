from PIL import Image
path = input('plz enter path of the png ')
image = Image.open(path)
rgb = image.convert('RGB')
rgb.save ('E:\website relate data\PYTHON CODE\PNG TO JPEG\Container\Small logo.jpg')
        #E:\website relate data\PYTHON CODE\PNG TO JPEG\Container\Small logo.png