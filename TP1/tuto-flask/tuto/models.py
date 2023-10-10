
import yaml, os.path
from .app import db
from flask_login import UserMixin

Books = yaml.safe_load(
    open(
        os.path.join(
            os.path.dirname(__file__),
            "data.yml"
        )
    )
)
# Pour avoir un id
i = 0
for book in Books:
    book['id'] = i
    i += 1

def get_sample():
    return Books[0:10]

class Author(db.Model):
    id = db.Column(db.Integer, primary_key=True)
    name = db.Column(db.String(80), nullable=False)

    def __repr__(self):
        return "<Author (%d) %s>" % (self.id, self.name)    

class Book(db.Model):
    id = db.Column(db.Integer, primary_key=True)
    price = db.Column(db.Float, nullable=False)
    title = db.Column(db.String(100), nullable=False)
    url= db.Column(db.String(250), nullable=False)
    img= db.Column(db.String(200), nullable=False)
    idAuthor = db.Column(db.Integer, db.ForeignKey('author.id'), nullable=False)
    author = db.relationship('Author', backref=db.backref('books', lazy='dynamic'))

    def __repr__(self):
        return "<Book (%d) %s>" % (self.id, self.title)
    
def get_sample2():
    return Book.query.limit(10).all()

def get_author(id):
    return Author.query.get(id)
    
# Classe pour l'authentification    
class User(db.Model,UserMixin):
    username = db.Column(db.String(50),primary_key =True)
    password = db.Column(db.String(64))
    
    def get_id(self):
        return self.username
    
    
    
    
    