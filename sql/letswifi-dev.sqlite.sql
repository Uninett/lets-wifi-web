CREATE TABLE "realm" (
	"domain" TEXT PRIMARY KEY NOT NULL,
	"trustedCaCert" TEXT NOT NULL,
	"trustedServerName" TEXT NOT NULL,
	"signingCaCert" TEXT NOT NULL,
	"signingCaKey" TEXT NOT NULL,
	"secretKey" BLOB NOT NULL
);
CREATE TABLE "tlsindex" (
	"serial" INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
	"domain" TEXT REFERENCES "realm" NOT NULL,
	"requester" TEXT NOT NULL,
	"usage" TEXT NOT NULL,
	"commonName" TEXT NOT NULL,
	"startDate" TEXT NOT NULL,
	"endDate" TEXT NOT NULL,
	"csr" TEXT NOT NULL,
	"x509" TEXT,
	"revokedDate" TEXT
);
