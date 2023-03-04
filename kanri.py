import sys
import os
import hashlib
import time
import requests
import gzip
import tarfile

class PROJ:
	def __init__(self):
		self.files = {}
		self.branches = {}
		
		self.remote = ""
		self.index = []
		if (os.path.exists(".kanri")):
			self.remote = self.read_remote()
			self.index = self.read_index()
		# self.req_session = requests.session()


	def change_remote(func):
		def f(self, *args, **kwargs):
			func(self, *args, **kwargs)
			self.remote = self.read_remote()

		return f

	def add_file(self, path):
		# if (path not in self.files):
			# self.files[path] = 
		pass

	def apply(self):
		pass

	def init_proj(self):
		if (os.path.exists(".kanri")): print("cannot init new. a file named '.kanri' already exists"); quit()
		
		try:
			os.mkdir(".kanri")
		except Exception as e:
			print(f"could not initialize .kanri directory: {e}"); quit()

		# try:
			# os.mkdir(".kanri/")
		# except Exception as e:
			# print(f"could not initialize: {e}"); quit()

		f = open(".kanri/INDEX", "a").close()

		f = open(".kanri/HEAD", "a").close()

		f = open(".kanri/REMOTE", "a").close()

		f = open(".kanri/COMMIT_MSG", "a").close()


	@change_remote
	def add_remote(self, url):
		f = open(".kanri/REMOTE", "w")
		f.write(url)
		f.close()

	def create_hash(self, s=""):
		# return bytes(time.time().__repr__(), "ascii")
		return hashlib.sha1(bytes(time.time().__repr__() + s, "ascii")).hexdigest()

	def commit(self, msg):
		f = open(".kanri/COMMIT_MSG", "w")
		f.write(msg)
		f.close()


	def read_index(self):
		f = open(".kanri/INDEX", "r")
		x = f.read().splitlines()
		f.close()
		return x

	def read_remote(self):
		f = open(".kanri/REMOTE", "r")
		x = f.read()
		f.close()
		return x

	def push(self, remote=""):
		if (not remote): remote = self.remote
		if (not remote): print("no remote"); quit()

		p = {
			"submit": "submit",
		}

		t = tarfile.open(".kanri.tar.gz", "w:gz")
		for f in self.index:
			# print("f: ", f)
			t.add(f)
		t.add(".kanri")
		# t.add("./")
		t.close()
		
		files = {
			"file[]" : open(".kanri.tar.gz", "rb"),
		}
		
		# headers = {'Content-Type': 'multipart/form-data'}
		headers = {}
		r = requests.post(remote, data=p, files=files, headers=headers)
		print(r)
		print(r.text)
		for k in files.keys():
			files[k].close()

	def pull(self, remote=""):
		if (not remote): remote = self.remote
		if (not remote): print("no remote"); quit()
		
		
		
def load_proj():
	pass


def main():
	p = PROJ()
	print(p.create_hash())
	print(p.remote)
	if (not sys.argv[1:]):
		print("kanri -h")
		quit()

	elif sys.argv[1] == "add":
		pass

	elif sys.argv[1] == "init":
		p.init_proj()

	elif sys.argv[1] == "commit":
		p.commit(sys.argv[2])

	elif sys.argv[1] == "remote":
		p.add_remote(sys.argv[2])

	elif sys.argv[1] == "push":
		p.push(sys.argv[2:])

	elif sys.argv[1] == "pull":
		p.push(sys.argv[2])


	print(p.remote)	


if __name__ == "__main__":
	main()


	