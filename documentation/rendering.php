<?php
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");
	$App = new App();
	$Nav = new Nav();
	$Menu = new Menu();
	include($App->getProjectCommon());
	
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "OSEE - Rendering";
	$pageKeywords	= "OSEE, Open, System, Engineering, Environment, Eclipse, Application Framework, Renderer";
	$pageAuthor		= "Jeff C. Phillips";

	# Paste your HTML content between the EOHTML markers!
	
	$html = <<<EOHTML

	<div id="midcolumn" style="width:95%">
		<h3>$pageTitle</h3>
		<h4>Adding a Custom Editor</h4>
		
		<p>Additional editors can be added to OSEE and configured so that they will appear in the "Open With" menus throughout OSEE based on a specific artifact type selected. The steps outlined below assume that a custom editor has already been created.</p>
		
		<h4>Topics</h4>
		<ul>
			<li>Create Command</li>
			<li>Create Handler</li>
			<li>Create Renderer</li>
			</ul>
		
		<h4>Create a Command</h4>
		<ul>
		<li>Command id: command.custom.editor</li>
		<li>A command will need to be created to provide a name and icon for the menu item.</li>
			<br>1) Create an extension for the command org.eclipse.ui.commands.
			<br>2) To add an icon create an extension org.eclipse.ui.commandImages.
		</ul>
		
		<h4>Create a Handler</h4>
		<p>
		A handler will be needed to perform the operation desired when the menu is selected. In this case it will be to open the custom editor.
		</p>
		
		<ul>
		<li>
		Create a Handler class that extends AbstractEditorHandler. Extending this class provides the developer with a protected populated list of artifacts and supports access control features.
		</li>
		<code>
		<pre>
		/**
		* @author Jeff C. Phillips
		*/
		public class CustomEditorHandler extends AbstractEditorHandler {
		
		 @Override
		public Object execute(ExecutionEvent event) throws ExecutionException {
		  CustomRenderer renderer = new CustomRenderer();
		      try {
					//artifacts is a protected list of artifacts that are populated by the super class AbstractEditorHandler
		         renderer.open(artifacts);
		      } catch (OseeCoreException ex) {
		         OseeLog.log(CustomEditorHandler.class, Level.SEVERE, ex);
		      }
		      dispose();
		    return null;
		  }
		
		   @Override
		   protected PermissionEnum getPermissionLevel() {
		   //The default implementation is Read but can be changed here.
		      return super.getPermissionLevel();
		   }
		}
		</pre>
		</code></ul>
		
		<ul>
		 <li>
		  Create extension point for the handler
		  <p>
		 	Create an org.eclipse.ui.handlers extension with the previous command ID and add the above handler class.
		 	</p>
		 </li>
		</ul>
		
		<h4>
		Create a custom Renderer
		</h4>
		
		<p>
		The general purpose of the renderer is to renderer artifacts to different formats. Contributing a new renderer requires two steps. The first create the new renderer class and the second create a new extension point.
		</P>
		<ul>
		<li>
		Create new Renderer
		</li>
		<pre>
		/**
		 * @author Jeff C. Phillips
		 */
		
		public class CustomRenderer extends DefaultArtifactRenderer {
		
		   @Override
		   /**
		    * The applicability rating is what is used by the RendererManager to decide which renderer can be used for
		    * specific artifact types.
		    */
		   public int getApplicabilityRating(PresentationType presentationType, Artifact artifact) throws OseeCoreException {
		      //In this example, this renderer will be applicable for WordArtifacts
		      if (artifact.isOfType(WordArtifact.WORD_TEMPLATE)) {
		         return PRESENTATION_SUBTYPE_MATCH;
		      }
		      return NO_MATCH;
		   }
		
		   @Override
		   /**
		    * Returns a list of command IDs that will be converted into Menu items
		    */
		   public List<String> getCommandId(PresentationType presentationType) {
		      ArrayList<String> commandIds = new ArrayList<String>(1);
		
		      if (presentationType == PresentationType.SPECIALIZED_EDIT) {
		         commandIds.add("command.custom.editor");
		      }
		
		      return commandIds;
		   }
		
		   @Override
		   public DefaultArtifactRenderer newInstance() throws OseeCoreException {
		      return new CustomRenderer();
		   }
		
		   @Override
		   public void open(List<Artifact> artifacts) throws OseeCoreException {
		      //Invoke custom editor
		      CustomEditor.open(artifacts);
		   }
		
		   @Override
		   public void preview(List<Artifact> artifacts) throws OseeCoreException {
		      super.preview(artifacts);
		   }
		
		}
		</pre>
		<li>
		Create new extension point
		</li>
		<p>org.eclipse.osee.framework.ui.skynet.ArtifactRenderer.
			<br>Add a new renderer and select the renderer class above.
		</p>
		</ul>
	</div>
EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
