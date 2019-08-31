<?php
	
	namespace App\Entity;
	
	use ApiPlatform\Core\Annotation\ApiResource;
	use Doctrine\ORM\Mapping as ORM;
	
	/**
	 * @ApiResource()
	 * @ORM\Entity(repositoryClass="App\Repository\CardModelRepository")
	 */
	class CardModel {
		/**
		 * @ORM\Id()
		 * @ORM\GeneratedValue()
		 * @ORM\Column(type="integer")
		 */
		private $id;
		
		/**
		 * @ORM\OneToOne(targetEntity="App\Entity\Company", cascade={"persist", "remove"})
		 * @ORM\JoinColumn(nullable=false)
		 */
		private $idcompany;
		
		/**
		 * @ORM\Column(type="string", length=255)
		 */
		private $name;
		
		/**
		 * @ORM\Column(type="json_array")
		 */
		private $items = [];
		
		/**
		 * @ORM\Column(type="string", length=255, nullable=true)
		 */
		private $backgroundLink;
		
		public function getId(): ?int {
			return $this->id;
		}
		
		public function getIdcompany(): ?Company {
			return $this->idcompany;
		}
		
		public function setIdcompany(Company $idcompany): self {
			$this->idcompany = $idcompany;
			
			return $this;
		}
		
		public function getName(): ?string {
			return $this->name;
		}
		
		public function setName(string $name): self {
			$this->name = $name;
			
			return $this;
		}
		
		public function getItems(): ?array {
			return $this->items;
		}
		
		public function setItems(array $items): self {
			$this->items = $items;
			
			return $this;
		}
		
		public function getBackgroundLink(): ?string {
			return $this->backgroundLink;
		}
		
		public function setBackgroundLink(?string $backgroundLink): self {
			$this->backgroundLink = $backgroundLink;
			
			return $this;
		}
	}
