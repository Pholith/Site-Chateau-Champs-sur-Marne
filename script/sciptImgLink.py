def modifFile(file):


	with open(file, "r") as f1, open("test.html", "w") as f2:

		started = False
		act = ""
		inFigure = False

		for ligne in f1:
			if "section" in ligne:
				started = not started
			
			

			if started:
				if "figure" in ligne:
					inFigure = not inFigure

				if inFigure and "<img" in ligne:
					act = ligne.split("\"")
					act.append("</a>")
					
					tranch = act[0].split("<")
					act[0] = "<"+tranch[1]


					act.insert(0, "<a href=\""+act[1]+"\">")
					ligne = tranch[0] + act[0] + "\"".join(act[1:-1]).replace("\n","") + act[-1] + "\n"


			f2.write(ligne)


if __name__ == "__main__":
	file = "galeriePhoto.html"
	modifFile(file)