# BackEnd Web Dev :ok_hand:		

### SETUP SERVER 
1. Open UniserverZ, start mariaDB and apache after that minimize it.
2. Open SQLyog, type _root_ as a password (but you can choose whatever you like)
3. Create Database using this code:
```
CREATE DATABASE students_yourname;

USE students_yourname; -- replace yourname with your actual name

CREATE TABLE yourname( -- should be tbe same as what is in " " at the $table_name	id INT PRIMARY KEY AUTO_INCREMENT,
	userlevel VARCHAR (10),
	studentNumber VARCHAR(13),
	fullName VARCHAR(150),
	midtermGrade DECIMAL(5, 2),
	finalGrade DECIMAL(5, 2),
	dateCreated DATE,
	isDeleted INT(1) DEFAULT 0
);
```

### SETUP INTERFACE
1. Downlaod the Zip file from here


![Download Zip](https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fhelpdeskgeek.com%2Fwp-content%2Fpictures%2F2021%2F06%2F11CodeButtonDownloadZip.png&f=1&nofb=1&ipt=dcca7191e9baf8dce77fcdc9e1826c7f7edd83683bce5ddc256296f8f7d345e6&ipo=images)

2. Extract the Zip file that you've download


![Extract Zip File](https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.top-password.com%2Fblog%2Fwp-content%2Fuploads%2F2013%2F07%2Fextract-all.png&f=1&nofb=1&ipt=58c023340222f0ed965f05cf14375f7e81f960197f5e40c91ad69517b84914de&ipo=images)

3. Locate your UniserverZ file location then paste all the extracted files in the folder named **_www_**
4. Open the folder in VSCode
5. In `config\database.php`, put your database name inside the blank quotes ""
6. Also in `process\add_exe.php` edit the variables based on what is needed.
7. Save Changes `ctrl + s`
8. Access your file in [LocalHost](http://localhost:81/)
9. Double Click the name of your **Folder**
10. Pa-check mo na kay Sir!!! :grin:	

### VIDEO GUIDE :blush:
[![Video guide](https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fwallpapercave.com%2Fwp%2FJYJSnEO.jpg&f=1&nofb=1&ipt=a5ae643627d798e1455ea3e028568c7db99e18083a37a9c98c74fabef12b4fde&ipo=images)](https://vimeo.com/884096552)


