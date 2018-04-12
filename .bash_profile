# .bash_profile

# Get the aliases and functions
if [ -f /etc/userbashrc ]; then
	. /etc/userbashrc
fi

# User specific environment and startup programs

PATH=$PATH:$HOME/bin
export PATH

mesg n

LANG=ko_KR.UTF-8
export LANG
