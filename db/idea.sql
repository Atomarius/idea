PRAGMA foreign_keys = OFF;
BEGIN TRANSACTION;
CREATE TABLE idea (
		id          VARCHAR(16) PRIMARY KEY,
		title       VARCHAR(32),
		author      VARCHAR(32),
		description TEXT,
		rating      REAL,
		votes       INT
);
COMMIT;
