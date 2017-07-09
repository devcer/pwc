#!/usr/bin/env python
# -*- coding: utf-8 -*-
#
#  AadharSearch.py
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
#  
#  

import re

def Aadhar_Search(Scrape_string):
	
	
	Aadhar=re.findall(r'\d{12}',Scrape_string)
	print Aadhar
	print type(Aadhar)
	
	
SomeString = "This is a private PAN Card number AUSPG3172Fhakuna AUXPP0435M and the aadhar number is 123456780435"
Aadhar_Search(SomeString)
