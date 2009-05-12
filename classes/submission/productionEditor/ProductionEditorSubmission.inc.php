<?php

/**
 * @file classes/submission/productionEditor/ProductionEditorSubmission.inc.php
 *
 * Copyright (c) 2003-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class ProductionEditorSubmission
 * @ingroup submission
 * @see ProductionEditorSubmissionDAO
 *
 * @brief ProductionEditorSubmission class.
 */

// $Id$


import('monograph.Monograph');

class ProductionEditorSubmission extends Monograph {

	/**
	 * Get layout assignments for this article.
	 * @return array
	 */
	function &getLayoutAssignments() {
		$editAssignments =& $this->getData('layoutAssignments');
		return $editAssignments;
	}

	/**
	 * Set layout assignments for this article.
	 * @param $layoutAssignments array
	 */
	function setLayoutAssignments($layoutAssignments) {
		return $this->setData('layoutAssignments', $layoutAssignments);
	}

	/**
	 * Get supplementary files for this article.
	 * @return array SuppFiles
	 */
	function &getSuppFiles() {
		$returner =& $this->getData('suppFiles');
		return $returner;
	}

	/**
	 * Set supplementary file for this article.
	 * @param $suppFiles array SuppFiles
	 */
	function setSuppFiles($suppFiles) {
		return $this->setData('suppFiles', $suppFiles);
	}

	/**
	 * Get post-review file.
	 * @return MonographFile
	 */
	function &getEditorFile() {
		$returner =& $this->getData('editorFile');
		return $returner;
	}

	/**
	 * Set post-review file.
	 * @param $editorFile MonographFile
	 */
	function setEditorFile($editorFile) {
		return $this->setData('editorFile', $editorFile);
	}

	/**
	 * Get submission file for this article.
	 * @return MonographFile
	 */
	function &getSubmissionFile() {
		$returner =& $this->getData('submissionFile');
		return $returner;
	}

	/**
	 * Get the current layout file for a monograph.
	 * @return MonographFile
	 */
	function &getLayoutFile() {
		$layoutFile =& $this->getData('layoutFile');
		return $layoutFile;
	}

	/**
	 * Set the layout file.
	 * @param $layoutFile MonographFile
	 */
	function setLayoutFile(&$layoutFile) {
		return $this->setData('layoutFile', $layoutFile);
	}
	/**
	 * Set submission file for this article.
	 * @param $submissionFile MonographFile
	 */
	function setSubmissionFile($submissionFile) {
		return $this->setData('submissionFile', $submissionFile);
	}
	/**
	 * Get most recent layout comment.
	 * @return ArticleComment
	 */
	function getMostRecentLayoutComment() {
		return $this->getData('mostRecentLayoutComment');
	}

	/**
	 * Set most recent layout comment.
	 * @param $mostRecentLayoutComment ArticleComment
	 */
	function setMostRecentLayoutComment($mostRecentLayoutComment) {
		return $this->setData('mostRecentLayoutComment', $mostRecentLayoutComment);
	}

	/**
	 * Get most recent proofread comment.
	 * @return ArticleComment
	 */
	function getMostRecentProofreadComment() {
		return $this->getData('mostRecentProofreadComment');
	}

	/**
	 * Set most recent proofread comment.
	 * @param $mostRecentProofreadComment ArticleComment
	 */
	function setMostRecentProofreadComment($mostRecentProofreadComment) {
		return $this->setData('mostRecentProofreadComment', $mostRecentProofreadComment);
	}

	/**
	 * Get the galleys for an article.
	 * @return array ArticleGalley
	 */
	function &getGalleys() {
		$galleys = &$this->getData('galleys');
		return $galleys;
	}

	/**
	 * Set the galleys for an article.
	 * @param $galleys array ArticleGalley
	 */
	function setGalleys(&$galleys) {
		return $this->setData('galleys', $galleys);
	}
}

?>