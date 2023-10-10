from flask import Flask 
from flask_bootstrap import Bootstrap5
import os.path
app= Flask(__name__)
app.config['BOOTSTRAP_SERVE_LOCAL']=True
app.config['SECRET_KEY'] = "e589ed62-9678-4a84-a17e-bf789e6cc539"
bootstrap=Bootstrap5(app)

def mkpath (p):
    return os.path. normpath (
        os.path.join(
            os.path. dirname ( __file__ ),
            p))



from flask_sqlalchemy import SQLAlchemy

app.config["SQLALCHEMY_DATABASE_URI"] ="sqlite:///" + mkpath ("../myapp.db")
db = SQLAlchemy(app)

from flask_login import LoginManager
login_manager = LoginManager(app)

login_manager.login_view = "login"