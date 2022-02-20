import os
from pdf2image import convert_from_path
from PIL import Image, ImageTk

# take save location
SaveLocation = "output/"

#function for converting PDF file to JPEG
def convert_pdf(pdf_path,SaveLocation,res=300):

    # counting pages contained in pdf
    pages = convert_from_path(pdf_path,res)

    # extract file name
    name_and_extention  =   pdf_path.rsplit ('/') [-1]
    name = name_and_extention.rsplit('.')[0]

    # checking folder existance, making folder at save directory and saving JPEG files in it
    if os.path.exists(f'{SaveLocation}\{name}'):
        location = (f'{SaveLocation}\{name}')
    else:
        fol = os.makedirs(f'{SaveLocation}\{name}')
        location = (f'{SaveLocation}\{name}')

    # naming each JPEG file
    for index, page in enumerate(pages):
        page.save(f'{location}\{name}_{index}.jpeg', 'JPEG')




