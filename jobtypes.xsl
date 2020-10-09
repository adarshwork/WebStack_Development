<?xml version="1.0" encoding="UTF-8"?> 
<xsl:stylesheet version="1.0" 
xmlns:xsl="http://www.w3.org/1999/XSL/Transform"> 
<xsl:template match="/"> 
<html> 
<body> 
<h1 align="center">Job-Host</h1> 
<table border="3" align="center"> 
<tr> 
	<th>Title</th> 
	<th>Type</th> 
	<th>Location</th> 
	<th>Salary</th>
	<th>Description</th>
	<th>Vacancy</th>
</tr> 
	<xsl:for-each select="jtypes/jinfo"> 
<tr> 
	<td><xsl:value-of select="title"/></td> 
	<td><xsl:value-of select="type"/></td> 
	<td><xsl:value-of select="location"/></td> 
	<td><xsl:value-of select="salary"/></td> 
	<td><xsl:value-of select="description"/></td>
	<td><xsl:value-of select="vacancy"/></td>
</tr> 
	</xsl:for-each> 
</table> 
</body> 
</html> 
</xsl:template> 
</xsl:stylesheet> 
