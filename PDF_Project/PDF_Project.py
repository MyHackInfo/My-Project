import PyPDF2

# Creting pdf object of file
objpdfFile = open('css_tutorial.pdf','rb')

# Creating pdf object for Reading
pdfReader = PyPDF2.PdfFileReader(objpdfFile)

# Creating pdf object for Writing
pdfWriter = PyPDF2.PdfFileWriter()



def Pages():
    print("PDF Pages :",pdfReader.getNumPages())
    

def GetPage():
    number = int(input("Enter Page number of PDF Text You Want :"))
    pageObj = pdfReader.getPage(number)
    print("PDF Page {} Text ".format(number))
    print(pageObj.extractText())
    print("Contents of page",pageObj.getContents())

def pdfRotatingClockwise():

    # Rotating Each page
    for page in range(pdfReader.numPages):

        # Creating rotated page obj
        pageobj = pdfReader.getPage(page)
        pageobj.rotateClockwise(270)

        # Adding rotated page to pdf writer
        pdfWriter.addPage(pageobj)

    # New pdf file object
    newfile = open('rotatedfile2.pdf', 'wb')

    # writer rotated page in new pdf file
    pdfWriter.write(newfile)

    newfile.close()
    print("New PDF File Created Clockwise ")


    
def pdfRotating_CounterClockwise():

    # Rotating Each page
    for page in range(pdfReader.numPages):

        # Creating rotated page obj
        pageobj = pdfReader.getPage(page)
        pageobj.rotateCounterClockwise(270)

        # Adding rotated page to pdf writer
        pdfWriter.addPage(pageobj)

    # New pdf file object
    newfile = open('rotatedfile3.pdf', 'wb')

    # writer rotated page in new pdf file
    pdfWriter.write(newfile)

    newfile.close()
    print("New PDF File Created CounterClockwise")        
        

def pdfMerging(pdfs,output):
    # Creat Merger pdf obj
    pdfMerger = PyPDF2.PdfFileMerger()
    
    # Appending pdfs one by one
    for pdf in pdfs:
        with open(pdf,'rb') as f:
            pdfMerger.append(f)
    with open(output, 'wb' ) as f:
        pdfMerger.write(f)

    print("Merging Done")

def GetInfo():
    info = pdfReader.getDocumentInfo()
    print("Title:",info['/Title'])
    print("Author:",info['/Author'])
    print("Creator:",info['/Creator'])
    print("Producer:",info['/Producer'])
    

def ScaleTo():
    width = float(input("Enter Width Size in Float:"))
    height = float(input("Enter Height Size in Float:"))
    Scale = PyPDF2.pdf.PageObject()
    Resize = Scale.scaleTo(width,height)
    print("Resize Done width:{}, height{}".format(width,height))
    
    

def main():
    # This Pages function give page number of PDF
    Pages()

    # This GetPage function give page text you want in PDF
    GetPage()

    # This pdfRotating function rotate pdf file in Clockwise
    #pdfRotatingClockwise()

    # This pdfRotating_CounterClockwise function rotate pdf file in CounterClockwise
    #pdfRotating_CounterClockwise()

    # This pdfMerging function merger pdfs file in new file
    #pdfMerging(['1.pdf','2.pdf'],'combined3.pdf')

    # This GetInfo Function use for Document information
    #GetInfo()

    # This ScaleTo function use Resize page width and height
    ScaleTo()

    
    
    # And this close function use for close pdf file 
    objpdfFile.close()
    



if __name__  ==  "__main__":
    main()
