#!/usr/bin/env python
# -*- coding: utf-8 -*-
#
#  pdfScraping.py
#  
#  Copyright 2017 raja <raja@raja-Inspiron-N5110>
#  
#  This program is free software; you can redistribute it and/or modify
#  it under the terms of the GNU General Public License as published by
#  the Free Software Foundation; either version 2 of the License, or
#  (at your option) any later version.
#  
#  This program is distributed in the hope that it will be useful,
#  but WITHOUT ANY WARRANTY; without even the implied warranty of
#  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#  GNU General Public License for more details.
#  
#  You should have received a copy of the GNU General Public License
#  along with this program; if not, write to the Free Software
#  Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
#  MA 02110-1301, USA.
#  1) step 1: Upload urls
#2) step 2: Upload user specific search
#3) Output
#  https://schoolofdata.org/2013/08/16/scraping-pdfs-with-python-and-the-scraperwiki-module/

import urllib2, urlparse, lxml, os, sys, requests, re, csv, scraperwiki
import pandas as pd
from io import BytesIO
from zipfile import ZipFile
from bs4 import BeautifulSoup
#from urllib.request import urlopen


"""def ReadURINames():
	with open('names.csv', 'rb') as f:
		reader = csv.reader(f)
    for row in reader:
        #print row
        uri = row
        pdflinks=get_pdf_links(uri)
        pdf = process2PDF('https://www.pdf-archive.com/2017/05/24/pancard-aadhar-card-test-data/pancard-aadhar-card-test-data.pdf')
		pdfToSoup = parse_HTML_tree(pdf)
		soupToArray = pdfToSoup.findAll('text')

#Process2excel()
#print type(soupToArray)
ContentInString = str(soupToArray)
PAN_Search(ContentInString)
Aadhar_Search(ContentInString)"""
"""for line in soupToArray:
	print line"""
	
"""for link in pdflinks:
         
        # obtain filename by splitting url and getting 
        # last string
        file_name = link.split('/')[-1]  
for FN in file_name:
	print FN"""
        

def PAN_Search(Scrape_string,uri):
	
	#PAN=re.findall(r'[A-Z][A-Z][A-Z]A|B|C|F|G|H|L|J|P|T|K[A-Z][0-9][0-9][0-9][0-9][A-Z]|[0-9]',Scrape_string)
	#PAN=re.findall(r'[A-Za-z]{5}',Scrape_string)
	PAN=re.findall(r'[A-Za-z]{5}\d{4}[A-Za-z]{1}',Scrape_string)
	print PAN
	#PAN=re.findall(r'[A-Z][A-Z][A-Z]A|B|C|F|G|H|L|J|P|T|K[A-Z][0-9][0-9][0-9][0-9][A-Z]',Scrape_string)
	#print type(PAN)
	#To check if the found PAN is blackListed or not
	
	with open("/var/www/html/outputs/RED/PAN_RedList.csv",'wb') as resultFile:
		wr = csv.writer(resultFile, dialect='excel')
		wr.writerow(PAN)
		#wr.writerow(uri)
		resultFile.close()
		
	with open('/var/www/uploads/BlackListPan.csv', 'rb') as f:
		reader = csv.reader(f)
		#print type(reader)
		for black in reader:
			for pan in PAN:
				if pan in black:
					print "Black listed found",pan
					with open("/var/www/html/outputs/BLACK/PAN_BlackListFound.csv",'wb') as resultFile:
						wr = csv.writer(resultFile, dialect='excel')
						wr.writerow(pan)
						resultFile.close()
	
	
	
def Aadhar_Search(Scrape_string,uri):
	

	Aadhar=re.findall(r'\d{12}',Scrape_string)
	print Aadhar
	#print type(Aadhar)
	with open("/var/www/html/outputs/RED/Aadhar_RedList.csv",'wb') as resultFile:
		wr = csv.writer(resultFile, dialect='excel')
		wr.writerow(Aadhar)
		wr.writerow(uri)
	
def Process2excel():
	
	url ="http://artconf.org/skimming/tesinf.xlsx"
	OpenURL = urllib2.urlopen(url)
	xd = pd.ExcelFile(OpenURL)
	print xd.sheet_names
	df = xd.parse(xd.sheet_names[-1], header=None)
	print df

def Process2docx():
	file = urllib2.urlopen("http://artconf.org/skimming/zilla.docx").read()
	file = BytesIO(file)
	document = ZipFile(file)
	content = document.read('word/document.xml')
	word_obj = BeautifulSoup(content.decode('utf-8'))
	text_document = word_obj.findAll('w:t')
	for t in text_document:
		print(t.text)

def get_pdf_links(url):
     
    # create response object
    r = requests.get(url)
     
    # create beautiful-soup object
    soup = BeautifulSoup(r.content,'html5lib')
     
    # find all links on web-page
    links = soup.findAll('a')
 
    # filter the link sending with .pdf
    pdf_links = [url + link['href'] for link in links if link['href'].endswith('pdf')]
	
    return pdf_links
   

def RequestSend(url):
#Get content, regardless of whether an HTML, XML or PDF file
    pageContent = urllib2.urlopen(url)
    return pageContent

def process2PDF(LocationOfFile):
#Use this to get PDF, covert to XML
    pdfToProcess = RequestSend(LocationOfFile)
    pdfToObject = scraperwiki.pdftoxml(pdfToProcess.read())
    return pdfToObject

def parse_HTML_tree(contentToParse):
#returns a navigatibale tree, which you can iterate through
    soup = BeautifulSoup(contentToParse,"lxml")
    return soup

def process2PDFV2(LocationOfFile):
	r = requests.get(LocationOfFile)
	soup = BeautifulSoup(r.text, 'lxml')
	rows = soup.find_all('tr')[1:]
	

	for row in rows:
		cell = [i.text for i in row.find_all('td')]
		print(cell)


def ReadCrawledURLs():
	with open("./urls.out") as f:
		content = f.readlines()
		# you may also want to remove whitespace characters like `\n` at the end of each line
		#content = [x.strip() for x in content] 

		print type(content)
		print content
		uri="http://www-personal.umich.edu/~csev/books/py4inf/media/"
		#uri=str(content)
		pdf = process2PDF('https://www.pdf-archive.com/2017/05/24/pancard-aadhar-card-test-data/pancard-aadhar-card-test-data.pdf')
		pdfToSoup = parse_HTML_tree(pdf)
		soupToArray = pdfToSoup.findAll('text')
		ContentInString = str(soupToArray)
		PAN_Search(ContentInString,uri)
		Aadhar_Search(ContentInString,uri)

		
#uri="http://www-personal.umich.edu/~csev/books/py4inf/media/"
#pdflinks=get_pdf_links(uri)
ReadCrawledURLs()
#pdf = process2PDF('https://www.pdf-archive.com/2017/05/24/pancard-aadhar-card-test-data/pancard-aadhar-card-test-data.pdf')
#pdfToSoup = parse_HTML_tree(pdf)
#soupToArray = pdfToSoup.findAll('text')


#Process2excel()
#print type(soupToArray)
#ContentInString = str(soupToArray)
#PAN_Search(ContentInString,uri)
#Aadhar_Search(ContentInString,uri)
"""for line in soupToArray:
	print line"""
	
"""for link in pdflinks:
         
        # obtain filename by splitting url and getting 
        # last string
        file_name = link.split('/')[-1]  
for FN in file_name:
	print FN"""

