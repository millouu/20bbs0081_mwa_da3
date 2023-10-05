<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
    <xsl:template match="/">
        <html>
            <head>
                <title>Bookmark- Books</title>
                <style>
                    @font-face {
                    font-family: "ITC Avant Garde Gothic Std Lt";
                    src: url("./fonts/ITCAvantGardeStd-Bk.otf") format(opentype);
                    }
                    @font-face {
                    font-family: "ITC Avant Garde Gothic Std";
                    src: url("./fonts/ITCAvantGardeStd-Bold.otf") format(opentype);
                    }
                    @font-face {
                    font-family: "ITC Avant Garde Gothic Std";
                    src: url("./fonts/ITCAvantGardeStd-Md.otf") format(opentype);
                    }

                    :root {
                    --avant-garde: "ITC Avant Garde Gothic Std";
                    }

                    * {
                    font-family: var(--avant-garde);
                    box-sizing: border-box;
                    margin: 0;
                    padding: 0;
                    }

                    body{
                    padding: 20px 200px;
                    }

                    h1{
                    font-weight:normal;
                    font-size: 40px;
                    margin-bottom:30px;
                    }

                    .card-container{
                    display: flex;
                    flex-wrap: wrap;
                    gap: 10px;
                    align-items:center;
                    justify-content: space-between;
                    }

                    .card {
                    border: 1px solid #ccc;
                    padding: 10px 20px;
                    margin-bottom:30px;
                    width: 300px;
                    display: flex;
                    flex-direction: column;
                    gap: 10px;
                    border-bottom: 2px solid #fa6400;
                    }
                </style>
            </head>
            <body>
                <h1>Our Offline Stores</h1>
                <div class="card-container">
                    <xsl:apply-templates select="library/store" />
                </div>
            </body>
        </html>
    </xsl:template>
    <xsl:template match="store">

        <div class="card">
            <h2>
                <xsl:value-of select="city" />
            </h2>
            <p>
                <b>Address: </b>
                <xsl:value-of select="address" />
            </p>
            <p>
                <b>Phone: </b>
                <xsl:value-of select="phone" />
            </p>
        </div>
    </xsl:template>
</xsl:stylesheet>