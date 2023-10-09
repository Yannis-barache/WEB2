from .app import app
from flask import render_template
from .models import *
from .commands import *
from .views import *
from flask_wtf import FlaskForm
from wtforms import StringField , HiddenField
from wtforms. validators import DataRequired



class AuthorForm ( FlaskForm ):
    id = HiddenField ('id')
    name = StringField ('Nom ', validators =[ DataRequired ()])
    
    
@app.route("/")

def home():
    return render_template(
        "home.html",
        title="Hello World !!!!!",
        books=get_sample2())

@app.route("/page2")

def page2():
    return render_template(
        "page2.html",
        title="Page 2",
        message="Hello World !!!!!  Khalil et Yassine ont fait cette page de golmon",
        )


@app.route("/books")
def books():
    return render_template(
        "livre.html",
        title="Books",
        books=get_sample()
    )



@app.route("/detail/<id>")
def detail(id):
    books = get_sample2()
    book = books[int(id)-1]
    return render_template(
        "detail.html",
        book=book)
    
@app.route("/edit/author/<int:id>")
def edit_author (id):
    a = get_author(id)
    f = AuthorForm(id=a.id, name=a.name)
    return render_template (
        "edit_author.html",
        author=a, form=f)