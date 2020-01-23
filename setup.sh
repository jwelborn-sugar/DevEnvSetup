# install macOS prereqs
xcode-select --install

# Start python venv and install requirements
pip3 install virtualenv
virtualenv -p python3 venv
source venv/bin/activate
pip install -r pyreqs.txt

# Install ansible Dependencies
ansible-galaxy install -r requirements.yml

ansible-playbook main.yml