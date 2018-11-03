from algoliasearch import algoliasearch

client = algoliasearch.Client("86OW1ZDE9Y", '9c48067351c7768aaaedde72e05621cc')
index = client.init_index('your_index_name')
