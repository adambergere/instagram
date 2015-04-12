#!/usr/bin/python

from flask import Flask
app = Flask(__name__)

@app.route('/instagram', methods=['GET','POST'])

def accept_subscription():
	if method == 'GET':
		req = request.data 

	return req 


if __name__ == '__main__':
	app.run()