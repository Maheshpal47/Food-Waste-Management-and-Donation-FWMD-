from selenium import webdriver
import webbrowser

driver = webdriver.Chrome()
driver.get("example.com")
button = driver.find_element_by_id('idofbutton')
button.click()