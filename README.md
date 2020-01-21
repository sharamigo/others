BANK CODE-SEARCH
-----------------

HOWTO:
-------
1.) First step: create the database.
Open the 'bankcodes.sql' file with a mysql-client (e.g. mysql workbench) and run the
sql-code in order to create the database and filling the table with basic data.
Or you can open the file with a text-editor of your choice and copy the code
via Ctrl+C and paste it into a database-client and run the code.

2.) Open the 'index.html' in your web browser.

3.) Now you can insert a bank-code into the input-field of the form, which you can see.
If there are already codes in the database, a suggestion-list will be displayed with
bank-codes that begin with the same numbers, which you type in.
You can click on one of the suggested code in order to fill the input-field with
the code for that you want to search for.
If there is no bank-code existing in the database, a SOAP-webservice will be called
in background an the found data will be inserted into the database-table.
You are getting a message in your browser, that a new entry was made.
You have to click on the button 'back to search-form' and you might enter the bank-code again,
which was already created in the database.

4.) After inserting the bank-code, you can access the results via click on the 'search'-button.
The result will be displayed in a table. 

Note:
All actions are logged in a txt-file. You can find the log-files in the folder 'logfiles/'
sorted by date.
