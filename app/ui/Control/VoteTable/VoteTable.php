<?php


namespace App\UI\Control\VoteTable;


use App\Model\Database\Entity\Proposal;
use Nette\Application\UI\Control;

class VoteTable extends Control
{
	/**
	 * @var Proposal
	 */
	private $proposal;

	/**
	 * VoteTable constructor.
	 * @param Proposal $proposal
	 */
	public function __construct(Proposal $proposal)
	{
		$this->proposal = $proposal;
	}

	public function render(): void
	{
		$template = $this->template;
		$template->setFile(__DIR__ . '/templates/vote_table.latte');
		$positiveVotes = $this->getPositiveVotes($this->proposal->getVotes());
		$negativeVotes = $this->getNegativeVotes($this->proposal->getVotes());
		$template->positiveCount = count($positiveVotes);
		$template->negativeCount = count($negativeVotes);
//		$template->didNotVoteCount = count($this->didNotVote);
//		$template->votes = array_merge($positiveVotes, $negativeVotes, $this->didNotVote);
		$template->votes = array_merge($positiveVotes, $negativeVotes);
		$template->render();
	}

	private function getNegativeVotes($votes)
	{
		$result = array();
		foreach ($votes as $vote) {
			if (!$vote->isPositive()) {
				$result[] = $vote->getUser();
			}
		}
		return $result;
	}

	private function getPositiveVotes($votes)
	{
		$result = array();
		foreach ($votes as $vote) {
			if ($vote->isPositive()) {
				$result[] = $vote->getUser();
			}
		}
		return $result;
	}

}
