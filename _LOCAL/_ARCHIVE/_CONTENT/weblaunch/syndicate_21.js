



// Create arrays of articles
syndicate.article_title = new Array;
syndicate.article_url = new Array;
syndicate.article_date = new Array;
syndicate.article_summary = new Array;
syndicate.article_content = new Array;

// This section of the script is published by the software
syndicate.index = 0;
  syndicate.article_title[ syndicate.index ] = 'Air Preparation Units Oxygen Generators: PSA or VSA';
  syndicate.article_url[ syndicate.index ] = 'http://192.168.1.34:8080/weblaunch/article_61.shtml';
  syndicate.article_date[ syndicate.index ] = 'Aug  9, 2004';
  syndicate.article_summary[ syndicate.index ] = 'Air used as the feed gas for the production of ozone must have a high degree of purity. Therefore atmospheric air must be treated before it can be used.';
  syndicate.index++;
  syndicate.article_title[ syndicate.index ] = 'OZFIL Ozone Systems for Bottling Water';
  syndicate.article_url[ syndicate.index ] = 'http://192.168.1.34:8080/weblaunch/article_66.shtml';
  syndicate.article_date[ syndicate.index ] = 'Dec 15, 2004';
  syndicate.article_summary[ syndicate.index ] = 'A&nbsp;complete stand alone ozone treatment system for the bottle filler ';
  syndicate.index++;
  syndicate.article_title[ syndicate.index ] = 'Ozonia Model LAB 2A Ozone Generator';
  syndicate.article_url[ syndicate.index ] = 'http://192.168.1.34:8080/weblaunch/article_67.shtml';
  syndicate.article_date[ syndicate.index ] = 'Dec 15, 2004';
  syndicate.article_summary[ syndicate.index ] = 'A small air-cooled unit specifically designed for bench top use for laboratory or other testing purposes.';
  syndicate.index++;
  syndicate.article_title[ syndicate.index ] = 'OZAT Pre-Packaged Ozone Plants';
  syndicate.article_url[ syndicate.index ] = 'http://192.168.1.34:8080/weblaunch/article_68.shtml';
  syndicate.article_date[ syndicate.index ] = 'Dec 15, 2004';
  syndicate.article_summary[ syndicate.index ] = 'Ideal for engineering companies, OEMs, smaller water utilities and aquariums. ';
  syndicate.index++;
  syndicate.article_title[ syndicate.index ] = 'Containerized Ozone Plants (COP)';
  syndicate.article_url[ syndicate.index ] = 'http://192.168.1.34:8080/weblaunch/article_69.shtml';
  syndicate.article_date[ syndicate.index ] = 'Dec 15, 2004';
  syndicate.article_summary[ syndicate.index ] = 'Turn-key and fully assembled standard solutions ';
  syndicate.index++;







// Set defaults for arguments if user hasn't set them
if (syndicate.title_fontface == null)    { syndicate.title_fontface = 'Geneva, Arial, sans-serif'; }
if (syndicate.title_fontsize == null)    { syndicate.title_fontsize = '2'; }
if (syndicate.title_fontcolor == null)   { syndicate.title_fontcolor = '#003399'; }
if (syndicate.title_fontbold == null)    { syndicate.title_fontbold = true; }
if (syndicate.title_fontital == null)    { syndicate.title_fontital = false; }
if (syndicate.date_fontface == null)     { syndicate.date_fontface = 'Geneva, Arial, sans-serif'; }
if (syndicate.date_fontsize == null)     { syndicate.date_fontsize = '1'; }
if (syndicate.date_fontcolor == null)    { syndicate.date_fontcolor = '#6699cc'; }
if (syndicate.date_fontbold == null)     { syndicate.date_fontbold = false; }
if (syndicate.date_fontital == null)     { syndicate.date_fontital = false; }
if (syndicate.date_fontunder == null)    { syndicate.date_fontunder = false; }
if (syndicate.summary_fontface == null)  { syndicate.summary_fontface = 'Geneva, Arial, sans-serif'; }
if (syndicate.summary_fontsize == null)  { syndicate.summary_fontsize = '2'; }
if (syndicate.summary_fontcolor == null) { syndicate.summary_fontcolor = '#6699cc'; }
if (syndicate.summary_fontbold == null)  { syndicate.summary_fontbold = false; }
if (syndicate.summary_fontital == null)  { syndicate.summary_fontital = false; }
if (syndicate.summary_fontunder == null) { syndicate.summary_fontunder = false; }

if (syndicate.title_maxlength == null)   { syndicate.title_maxlength = 0; }
if (syndicate.summary_maxlength == null) { syndicate.summary_maxlength = 0; }

if (syndicate.bgcolor == null)           { syndicate.bgcolor = '#ffffff'; }
if (!syndicate.max_articles)             { syndicate.max_articles = syndicate.article_title.length; }  // !syndicate.max_articles catches null and zero
if (syndicate.display_date == null)      { syndicate.display_date = true; }
if (syndicate.display_summaries == null) { syndicate.display_summaries = true; }


// Don't allow user to display too many articles
if (syndicate.max_articles > syndicate.article_title.length) {
  syndicate.max_articles = syndicate.article_title.length;
}

/*
//Function to crop text on word boundaries
function crop_text(text, max_length) {

  // If the string is already small enough, return it unscathed
  if (text.length <= max_length) { return( text ); }

  // If the user has specified a length of 0, it means he wants the whole thing
  if (max_length == 0) { return( text ); }

  // Start looking for a space, leaving space for an elipsis on the end
  var test_length = (max_length - 3);
  if (test_length < 1) { return( '...' ); }   // max_length too small
  while (text.charAt(test_length) != ' ') {
    test_length--;

    // If we didn't find any spaces to break on, return the string broken at max_length
    if (test_length == 0) { return( text.substring(0, max_length - 3) + '...' ); }
  }

  return text.substring(0, test_length) + '...';
}
*/

// List our articles, stopping if the user doesn't want any more
for ( syndicate.index = 0; syndicate.index < syndicate.max_articles ; syndicate.index++ ) {

  /*syndicate.article_title[syndicate.index] = crop_text(syndicate.article_title[syndicate.index], syndicate.title_maxlength);
  syndicate.article_summary[syndicate.index] = crop_text(syndicate.article_summary[syndicate.index], syndicate.summary_maxlength);*/

  document.write('<tr><td bgcolor="' + syndicate.bgcolor + '">');
  document.write('<a href="' + syndicate.article_url[syndicate.index] + '" target="_blank">');
  if (syndicate.title_fontbold)  { document.write('<b>'); }
  if (syndicate.title_fontital)  { document.write('<i>'); }
  document.write('<font color="' + syndicate.title_fontcolor + '" face="' + syndicate.title_fontface + '" size="' + syndicate.title_fontsize + '"');
  if (syndicate.title_style)     { document.write(' style="' + syndicate.title_style + '"'); }
  document.write('>');
  document.write(syndicate.article_title[syndicate.index]);
  document.write('<br></font>');
  if (syndicate.title_fontital)  { document.write('</i>'); }
  if (syndicate.title_fontbold)  { document.write('</b>'); }
  document.write('</a>');

  if (syndicate.display_date) {
    if (syndicate.date_fontbold)  { document.write('<b>'); }
    if (syndicate.date_fontital)  { document.write('<i>'); }
    if (syndicate.date_fontunder) { document.write('<u>'); }
    document.write('<font color="' + syndicate.date_fontcolor + '" face="' + syndicate.date_fontface + '" size="' + syndicate.date_fontsize + '"');
    if (syndicate.date_style)     { document.write(' style="' + syndicate.date_style + '"'); }
    document.write('>');
    document.write(syndicate.article_date[syndicate.index]);
    document.write('<br></font>');
    if (syndicate.date_fontunder) { document.write('</u>'); }
    if (syndicate.date_fontital)  { document.write('</i>'); }
    if (syndicate.date_fontbold)  { document.write('</b>'); }
  }

  if (syndicate.display_summaries) {
    if (syndicate.summary_fontbold)  { document.write('<b>'); }
    if (syndicate.summary_fontital)  { document.write('<i>'); }
    if (syndicate.summary_fontunder) { document.write('<u>'); }
    document.write('<font color="' + syndicate.summary_fontcolor + '" face="' + syndicate.summary_fontface + '" size="' + syndicate.summary_fontsize + '"');
    if (syndicate.summary_style)     { document.write(' style="' + syndicate.summary_style + '"'); }
    document.write('>');
    document.write(syndicate.article_summary[syndicate.index]);
    document.write('<br></font>');
    if (syndicate.summary_fontunder) { document.write('</u>'); }
    if (syndicate.summary_fontital)  { document.write('</i>'); }
    if (syndicate.summary_fontbold)  { document.write('</b>'); }
  }

  document.write('<br></td></tr>\n');
}

// If you want your Webfeeds to be branded, uncomment the following lines.
// To do this, remove the // at the beginning of the next five lines:

//document.write('<tr><td bgcolor="' + syndicate.bgcolor + '">');
//document.write('<a href="#" target="_blank">');
//document.write('<font color="' + syndicate.title_fontcolor + '" face="Verdana, Arial, Helvetica, sans-serif" size="1">');
//document.write('<b>Powered by SITENAME.com</b></font></a>');
//document.write('<br><br></b></font></td></tr>\n');
