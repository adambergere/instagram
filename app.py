#!/usr/bin/python

from flask import Flask
app = Flask(__name__)

@app.route('/instagram')

def accept_subscription():
	req = request.data 

	return req 


if __name__ == '__main__':
	app.run()