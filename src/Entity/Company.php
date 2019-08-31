<?php
	
	namespace App\Entity;
	
	use ApiPlatform\Core\Annotation\ApiResource;
	use Doctrine\ORM\Mapping as ORM;
	
	/**
	 * @ApiResource()
	 * @ORM\Entity(repositoryClass="App\Repository\CompanyRepository")
	 */
	class Company {
		/**
		 * @ORM\Id()
		 * @ORM\GeneratedValue()
		 * @ORM\Column(type="integer")
		 */
		private $id;
		
		/**
		 * @ORM\OneToOne(targetEntity="App\Entity\User", cascade={"persist", "remove"})
		 * @ORM\JoinColumn(nullable=false)
		 */
		private $iduser;
		
		/**
		 * @ORM\Column(type="string", length=255)
		 */
		private $name;
		
		/**
		 * @ORM\Column(type="string", length=255, nullable=true)
		 */
		private $siret;
		
		/**
		 * @ORM\Column(type="string", length=255, nullable=true)
		 */
		private $address;
		
		/**
		 * @ORM\Column(type="string", length=255, nullable=true)
		 */
		private $city;
		
		/**
		 * @ORM\Column(type="string", length=255, nullable=true)
		 */
		private $country;
		
		public function getId(): ?int {
			return $this->id;
		}
		
		public function getIduser(): ?User {
			return $this->iduser;
		}
		
		public function setIduser(User $iduser): self {
			$this->iduser = $iduser;
			
			return $this;
		}
		
		public function getName(): ?string {
			return $this->name;
		}
		
		public function setName(string $name): self {
			$this->name = $name;
			
			return $this;
		}
		
		public function getSiret(): ?string {
			return $this->siret;
		}
		
		public function setSiret(?string $siret): self {
			$this->siret = $siret;
			
			return $this;
		}
		
		public function getAddress(): ?string {
			return $this->address;
		}
		
		public function setAddress(?string $address): self {
			$this->address = $address;
			
			return $this;
		}
		
		public function getCity(): ?string {
			return $this->city;
		}
		
		public function setCity(?string $city): self {
			$this->city = $city;
			
			return $this;
		}
		
		public function getCountry(): ?string {
			return $this->country;
		}
		
		public function setCountry(?string $country): self {
			$this->country = $country;
			
			return $this;
		}
	}
