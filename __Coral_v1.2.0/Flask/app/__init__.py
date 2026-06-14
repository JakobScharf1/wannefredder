from flask import Flask
from flask_sqlalchemy import SQLAlchemy
from slugify import slugify

# Initialize the database
db = SQLAlchemy()

def create_app():
    app = Flask(__name__)

    from .context_processors import global_services, global_counters, global_projects, global_minds, global_review, global_blogs, global_sliders, global_tables, global_traders, global_partners, global_counters2, global_portfolios, global_features, global_teams, global_sliders2, global_collections, global_portfolios2, global_hostings, global_counters3, global_counters4, global_navs, global_mondays, global_coaches, global_causes, global_volunteers, global_services2, global_teams2, global_reviews, global_reviews1, global_reviews2, global_wallets, global_creators, global_portfolios3, global_portfolios4, global_portfolios5, global_portfolios6, global_portfolios7, global_portfolios8, global_images, global_posts, global_tags, global_images2, global_contacts
    app.context_processor(global_services)
    app.context_processor(global_counters)
    app.context_processor(global_projects)
    app.context_processor(global_minds)
    app.context_processor(global_review)
    app.context_processor(global_blogs)
    app.context_processor(global_sliders)
    app.context_processor(global_tables)
    app.context_processor(global_traders)
    app.context_processor(global_partners)
    app.context_processor(global_counters2)
    app.context_processor(global_portfolios)
    app.context_processor(global_features)
    app.context_processor(global_teams)
    app.context_processor(global_sliders2)
    app.context_processor(global_collections)
    app.context_processor(global_portfolios2)
    app.context_processor(global_hostings)
    app.context_processor(global_counters3)
    app.context_processor(global_counters4)
    app.context_processor(global_navs)
    app.context_processor(global_mondays)
    app.context_processor(global_coaches)
    app.context_processor(global_causes)
    app.context_processor(global_volunteers)
    app.context_processor(global_services2)
    app.context_processor(global_teams2)
    app.context_processor(global_reviews)
    app.context_processor(global_reviews1)
    app.context_processor(global_reviews2)
    app.context_processor(global_wallets)
    app.context_processor(global_creators)
    app.context_processor(global_portfolios3)
    app.context_processor(global_portfolios4)
    app.context_processor(global_portfolios5)
    app.context_processor(global_portfolios6)
    app.context_processor(global_portfolios7)
    app.context_processor(global_portfolios8)
    app.context_processor(global_images)
    app.context_processor(global_posts)
    app.context_processor(global_tags)
    app.context_processor(global_images2)
    app.context_processor(global_contacts)
    
    

    # Configure the app (set database URI and other configs)
    app.config['SQLALCHEMY_DATABASE_URI'] = 'sqlite:///database.db'  # Change to your preferred database
    app.config['SQLALCHEMY_TRACK_MODIFICATIONS'] = False

    # Initialize the database with the app
    db.init_app(app)

    # Import models to ensure they are registered with the app
    with app.app_context():
        from . import models
        db.create_all()  # Create the database tables

    # Register the blueprint (routes)
    from .routes import main
    app.register_blueprint(main)
    app.jinja_env.filters['slugify'] = slugify

    return app