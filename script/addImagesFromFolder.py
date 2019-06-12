import tkinter as tk
from tkinter import *
import os
import sys
from PIL import Image, ImageTk

currentImage = 0
images = []
paths = []

with open("result.sql", "w") as f:
    f.write("")

def next(label, nameField, tagsField, stringV, stringV2):
    global currentImage

    if len(nameField.get()) < 1:
        return
    if len(tagsField.get()) < 1:
        return

    # Sauvegarde des changements
    with open("result.sql", "a") as f:
        f.write("INSERT IGNORE INTO projet_photos VALUES (\"" + nameField.get() + "\", \"" + "sans_credit/"+os.path.basename(paths[currentImage]) + "\", \"" + tagsField.get() +"\" " + "); \n")

    # Changement de l'image 
    currentImage += 1
    if currentImage >= len(images):
        return
    photo = ImageTk.PhotoImage(images[currentImage])
    label.config(image = photo) 
    label.photo_ref = photo # keep a reference

    #vidage des champs
    stringV.set("")
    stringV2.set("")
    


def addTag(stringV, tag):
    if len(stringV.get()) > 0:
        stringV.set(stringV.get() + "," + tag)
    else :
        stringV.set(tag)



fenetre = tk.Tk()
fenetre.geometry("900x600")

with open("path.txt", "r") as f:
    path = f.readline()
    if path[-1] == "\n": # Si le fichier contient plusieurs lignes
        path = path[:-1]
print("Searching at path " + path)

# Listes qui contient toutes les images

for root, dirs, files in os.walk(path):
    for filename in files:

        filePath = path + "/" + filename
        print("Path = " + filePath)

        #print(os.path.exists(filePath))


        image = Image.open(filePath)
        size = 450, 450
        image.thumbnail(size, Image.ANTIALIAS)

        images.append(image)
        paths.append(filePath)



photo = ImageTk.PhotoImage(images[currentImage])
label = tk.Label(image=photo)
label.image = photo # keep a reference!
label.pack()

b = Button(fenetre, text = "Suivant", command = lambda: next(label, e1, e2, contentTag, contentName))
b.pack(side=tk.BOTTOM)


contentTag = StringVar()
e2 = Entry(fenetre, width=60, textvariable=contentTag)
e2.pack(side=tk.BOTTOM)
Label(fenetre, text = "Tags").pack(side=tk.BOTTOM)

Button(fenetre, text = "Intérieur", command = lambda: addTag(contentTag, "interieur")).pack(side=tk.BOTTOM)
Button(fenetre, text = "Extérieur", command = lambda: addTag(contentTag, "exterieur")).pack(side=tk.BOTTOM)
Button(fenetre, text = "Personnalites", command = lambda: addTag(contentTag, "personnalites")).pack(side=tk.BOTTOM)
Button(fenetre, text = "Statues", command = lambda: addTag(contentTag, "statues")).pack(side=tk.BOTTOM)
Button(fenetre, text = "Habits", command = lambda: addTag(contentTag, "habits")).pack(side=tk.BOTTOM)
Button(fenetre, text = "Tableaux", command = lambda: addTag(contentTag, "tableaux")).pack(side=tk.BOTTOM)


contentName = StringVar()

e1 = Entry(fenetre, width=60, textvariable=contentName)
e1.pack(side=tk.BOTTOM)
Label(fenetre, text = "Nom").pack(side=tk.BOTTOM)


fenetre.mainloop()