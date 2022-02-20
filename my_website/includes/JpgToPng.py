from PIL import Image
import sys
path = sys.argv[1]
image = Image.open(path)
rgba = image.convert('RGBA')
rgba.save (sys.argv[2] + ".png")
        