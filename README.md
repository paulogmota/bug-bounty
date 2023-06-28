██████  ██    ██  ██████      ██████   ██████  ██    ██ ███    ██ ████████ ██    ██ 
██   ██ ██    ██ ██           ██   ██ ██    ██ ██    ██ ████   ██    ██     ██  ██  
██████  ██    ██ ██   ███     ██████  ██    ██ ██    ██ ██ ██  ██    ██      ████   
██   ██ ██    ██ ██    ██     ██   ██ ██    ██ ██    ██ ██  ██ ██    ██       ██    
██████   ██████   ██████      ██████   ██████   ██████  ██   ████    ██       ██
Tips, tools and commands by paulo mota (under construction)

One-line subdomain enumeration using CHAOS:
```
xargs -a $domains -I@ sh -c 'chaos -d "@" -silent -key [YOUR KEY] >> chaos.txt'; cat chaos.txt | sed 's/^\*\.//' > subs.txt; rm chaos.txt
```
