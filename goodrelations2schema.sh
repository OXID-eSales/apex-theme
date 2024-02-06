#!/bin/bash

# 1. Replace mapping between schema.org and GoodRelations URIs
#See https://github.com/schemaorg/schemaorg/wiki/Schema.org-Goods
working_directory=$1
for line in $(cat schema_to_goodrelations_mapping)
do
  schema=`awk -F\@ '{print $1}' <<< $line`
  goodrelations=`awk -F\@ '{print $2}' <<< $line`
  find $working_directory -type f -name '*.html.twig' -exec sed -i "s/$goodrelations\"/$schema\"/g" {} +
done

# 2. Replace remaining properties that have unchanged names
goodrelations='gr:'
schema='schema:'
find $working_directory -type f -name '*.html.twig' -exec sed -i "s/$goodrelations/$schema/g" {} +

# 3. Replace URLs
goodrelations='xmlns:gr="http:\/\/purl.org\/goodrelations\/v1#"'
schema='xmlns:schema="http:\/\/schema.org\/"'
find $working_directory -type f -name '*.html.twig' -exec sed -i "s/$goodrelations/$schema/g" {} +

# 4. Replace rev properties
goodrelations='rev="schema:'
schema='rev="'
find $working_directory -type f -name '*.html.twig' -exec sed -i "s/$goodrelations/$schema/g" {} +

# 5. Replace rel properties
goodrelations='rel="schema:'
schema='rel="'
find $working_directory -type f -name '*.html.twig' -exec sed -i "s/$goodrelations/$schema/g" {} +

# 5. Replace dead data-vocabulary links
goodrelations='http:\/\/rdf.data-vocabulary.org\/#'
schema='http:\/\/schema.org\/'
find $working_directory -type f -name '*.html.twig' -exec sed -i "s/$goodrelations/$schema/g" {} +

# 6. Replace superceded Friend-of-a-friend usages
goodrelations='foaf:depiction v:image'
schema='schema:image'
find $working_directory -type f -name '*.html.twig' -exec sed -i "s/$goodrelations/$schema/g" {} +

goodrelations='foaf:page'
schema='schema:mainEntityOfPage'
find $working_directory -type f -name '*.html.twig' -exec sed -i "s/$goodrelations/$schema/g" {} +

goodrelations='xmlns:foaf="http:\/\/xmlns.com\/foaf\/0.1\/"'
schema=''
find $working_directory -type f -name '*.html.twig' -exec sed -i "s/$goodrelations/$schema/g" {} +

# check leftover goodrelations
