import yaml
from flask import render_template
app = Flask(__name__)

@app.route("/") 

def home():

    data = yaml.load(open("data.yml"))

    return render_template("home.html", data=data)




