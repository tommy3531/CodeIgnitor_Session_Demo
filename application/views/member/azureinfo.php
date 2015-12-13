<div id="wrapper">
	<div id='headerinfo'>
		<h1>Codeigniter and Azure Tutorial</h1>
		<p> This was the hardest part and did find some useful information from the below link. 
		<a id='linktag' href ="https://sunithamk.wordpress.com/2013/05/29/codeigniter-on-windows-azure-website/comment-page-1/">Codeigniter and Azure</a>
	</div>
	<div id="view_info">
		<h1> Azure Information</h1>
		<div id='content'>
			<p id='viewtext'> My best advice would be to create a git repo, once your files are uploaded to git go to the terminal and type in
							 'git remote -v', this will display a list of active repo connections. For example I have a git repo named
							 testsite and when ever I make changes I use git add ., git status git commit -m 'Message' and then git push origin master.
							 In the command git push origin master, origin is the name I gave to my github testsite repo.  After the issue git commit next
							 I would issue git push origin master and all new changes would be uploaded to github testsite repo.  This was the only way
							 I could get azure to recognize my Codeigniter framework.

							 The next step is go to your webapp and add git once git is added to the azure repo, you will need to add the remote for azure. 
							 When I need to upload the website to azure I have to first go through github and then github will send my project to azure. The 
							 below commands are what worked for me. 
							 1. Navigate to your root folder
							 2. git add .  				- this loads all files
							 3. git status 				- this tells me what files have changed since last push call
							 4. git commit -m 'Message' - This adds a message to the get repo of the changes
							 4. git push origin master  - Uploads all files to git repo
							 5. git push azure master   - Uploads files to azure site
			</p>
			<p id="learning link">
				<a href="http://www.codeigniter.com/user_guide/general/controllers.html?highlight=controller">Learn about Codeigniter</a>
			</p>
		</div>
	</div>
</div>