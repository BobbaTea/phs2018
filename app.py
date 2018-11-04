from flask import Flask, render_template, request
app = Flask(__name__)

@app.route("/api")
def index():
    return "Hello, World!"

if __name__ == "__main__":
    app.run()