import { ComponentFixture, TestBed } from '@angular/core/testing';

import { PortfolioMasonryFour } from './portfolio-masonry-four';

describe('PortfolioMasonryFour', () => {
  let component: PortfolioMasonryFour;
  let fixture: ComponentFixture<PortfolioMasonryFour>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [PortfolioMasonryFour]
    })
    .compileComponents();

    fixture = TestBed.createComponent(PortfolioMasonryFour);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
