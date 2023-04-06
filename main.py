from flask import Flask, request
import os

app = Flask(__name__)
UPLOAD_FOLDER = 'uploads'
app.config['UPLOAD_FOLDER'] = UPLOAD_FOLDER

@app.route('/upload', methods=['POST'])
def upload_file():
    file = request.files['file']
    filename = file.filename
    file.save(os.path.join(app.config['UPLOAD_FOLDER'], filename))
    return 'File {} has been uploaded successfully.'.format(filename)

@app.route('/delete', methods=['DELETE'])
def delete_file():
    filename = request.args.get('filename')
    try:
        os.remove(os.path.join(app.config['UPLOAD_FOLDER'], filename))
        return 'File {} has been deleted successfully.'.format(filename)
    except OSError:
        return 'File {} does not exist.'.format(filename)

if __name__ == '__main__':
    app.run(debug=True)
