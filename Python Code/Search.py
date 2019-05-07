import webbrowser

Search =input("Enter What You Search:")
url="https://www.google.com/search?q={}".format(Search)
url1="https://www.github.com/search?q={}".format(Search)


webbrowser.open(url,new=2,autoraise=True)
webbrowser.open_new(url1)
