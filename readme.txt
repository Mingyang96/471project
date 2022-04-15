EERM
RECORD: add PAY_STATUS attribute

RM
cut some VEHICLE attributes
create new INSURANCE table (as change to 1 to N)
TRANSACTION add VID, EMAIL, START_DATE (to indicate receipt relationship)
RECORD cut TID attribute (ras eceipt relation already shown in TRANSACTION)
RECORD cut GID, COM_NAME attribute (as VID and determine GID and COM_NAME)
RECORD add STATUS attribute (pay status)



Manual:
use PHP version: 4.9.1

Database setup:
1. username: root
2. password: 88888888
3. database name: 471project
